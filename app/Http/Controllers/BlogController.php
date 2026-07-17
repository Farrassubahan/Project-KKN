<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        $categories = Category::orderBy('nama', 'asc')->get();

        return view('admin.blog.index', compact('blogs', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255|unique:blogs,judul',
            'category_id' => 'required|exists:categories,id',
            'isi' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $thumbnailName = null;
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $thumbnailName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $thumbnailName);
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'category_id' => $request->category_id,
            'isi' => $request->isi,
            'thumbnail' => $thumbnailName,
        ]);

        return back()->with('success', 'Artikel baru berhasil diterbitkan.');
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'judul' => 'required|string|max:255|unique:blogs,judul,'.$blog->id,
            'category_id' => 'required|exists:categories,id',
            'isi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        $thumbnailName = $blog->thumbnail;
        if ($request->hasFile('thumbnail')) {
            // Hapus file lama jika ada
            if ($blog->thumbnail && File::exists(public_path('thumbnail/'.$blog->thumbnail))) {
                File::delete(public_path('thumbnail/'.$blog->thumbnail));
            }

            $image = $request->file('thumbnail');
            $thumbnailName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $thumbnailName);
        }

        $blog->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'category_id' => $request->category_id,
            'isi' => $request->isi,
            'thumbnail' => $thumbnailName,
        ]);

        return back()->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail && File::exists(public_path('thumbnail/'.$blog->thumbnail))) {
            File::delete(public_path('thumbnail/'.$blog->thumbnail));
        }

        $blog->delete();
        // Note: No return needed here as deletion redirects back.

        return back()->with('success', 'Artikel berhasil dihapus.');
    }

    private function compressAndSaveImage($image, $filename)
    {
        $destinationPath = public_path('thumbnail/'.$filename);
        $tempPath = $image->getRealPath();
        $extension = strtolower($image->getClientOriginalExtension());

        try {
            // Gunakan GD Library untuk kompresi agar sizenya kecil tapi tetap HD (kualitas 75%)
            if ($extension === 'jpeg' || $extension === 'jpg') {
                $src = imagecreatefromjpeg($tempPath);
                imagejpeg($src, $destinationPath, 75);
                imagedestroy($src);
            } elseif ($extension === 'png') {
                $src = imagecreatefrompng($tempPath);
                imagealphablending($src, false);
                imagesavealpha($src, true);
                imagepng($src, $destinationPath, 7); // Kompresi level 7
                imagedestroy($src);
            } elseif ($extension === 'webp') {
                $src = imagecreatefromwebp($tempPath);
                imagewebp($src, $destinationPath, 75);
                imagedestroy($src);
            } else {
                // Fallback jika format GIF, SVG, dll.
                $image->move(public_path('thumbnail'), $filename);
            }
        } catch (\Exception $e) {
            // Fallback jika GD library tidak aktif
            $image->move(public_path('thumbnail'), $filename);
        }
    }

    /**
     * Display the specified blog details as JSON for the admin detail modal.
     */
    public function show(Blog $blog)
    {
        // Build the absolute URL for the thumbnail if it exists
        $thumbnailUrl = $blog->thumbnail ? asset('thumbnail/'.$blog->thumbnail) : null;
        $categoryName = $blog->category ? $blog->category->nama : 'Tanpa Kategori';

        return response()->json([
            'judul' => $blog->judul,
            'isi' => $blog->isi,
            'thumbnail' => $thumbnailUrl,
            'category' => $categoryName,
            'created_at' => $blog->created_at->format('d M Y'),
        ]);
    }

    // private function compressAndSaveImage($image, $filename) {}
}

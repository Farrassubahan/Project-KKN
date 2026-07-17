<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'deskripsi' => 'nullable|string',
            'link_ecommerce' => 'nullable|url',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'harga.required' => 'Harga produk wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga tidak boleh kurang dari 0.',
            'foto.required' => 'Foto produk wajib diunggah.',
            'foto.image' => 'File harus berupa gambar.',
            'link_ecommerce.url' => 'Link e-commerce harus berupa URL yang valid (misal: https://shopee.co.id/...)'
        ]);

        $fotoName = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $fotoName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $fotoName);
        }

        Product::create([
            'name' => $request->name,
            'harga' => $request->harga,
            'foto' => $fotoName,
            'deskripsi' => $request->deskripsi,
            'link_ecommerce' => $request->link_ecommerce,
        ]);

        return back()->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'deskripsi' => 'nullable|string',
            'link_ecommerce' => 'nullable|url',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'harga.required' => 'Harga produk wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga tidak boleh kurang dari 0.',
            'foto.image' => 'File harus berupa gambar.',
            'link_ecommerce.url' => 'Link e-commerce harus berupa URL yang valid (misal: https://shopee.co.id/...)'
        ]);

        $fotoName = $product->foto;
        if ($request->hasFile('foto')) {
            if ($product->foto && File::exists(public_path('products/' . $product->foto))) {
                File::delete(public_path('products/' . $product->foto));
            }

            $image = $request->file('foto');
            $fotoName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $this->compressAndSaveImage($image, $fotoName);
        }

        $product->update([
            'name' => $request->name,
            'harga' => $request->harga,
            'foto' => $fotoName,
            'deskripsi' => $request->deskripsi,
            'link_ecommerce' => $request->link_ecommerce,
        ]);

        return back()->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->foto && File::exists(public_path('products/' . $product->foto))) {
            File::delete(public_path('products/' . $product->foto));
        }

        $product->delete();
        return back()->with('success', 'Produk berhasil dihapus.');
    }

    /**
     * Compress and save image using GD Library (maintaining HD quality while minimizing file size).
     */
    private function compressAndSaveImage($image, $filename)
    {
        $destinationDir = public_path('products');
        if (!File::exists($destinationDir)) {
            File::makeDirectory($destinationDir, 0755, true);
        }

        $destinationPath = $destinationDir . '/' . $filename;
        $tempPath = $image->getRealPath();
        $extension = strtolower($image->getClientOriginalExtension());

        try {
            if ($extension === 'jpeg' || $extension === 'jpg') {
                $src = imagecreatefromjpeg($tempPath);
                imagejpeg($src, $destinationPath, 75); // Kualitas 75%
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
                $image->move($destinationDir, $filename);
            }
        } catch (\Exception $e) {
            $image->move($destinationDir, $filename);
        }
    }
}

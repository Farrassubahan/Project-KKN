<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicBlogController extends Controller
{
    /**
     * Halaman daftar blog publik dengan paginasi dan filter kategori.
     */
    public function index(Request $request)
    {
        $categories = Category::withCount('blogs')->orderBy('nama')->get();

        $query = Blog::with('category')->latest();

        // Filter berdasarkan kategori jika ada
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $blogs    = $query->paginate(9)->withQueryString();
        $featured = Blog::with('category')->latest()->first();

        return view('public.informasi.blog', compact('blogs', 'categories', 'featured'));
    }

    /**
     * Halaman detail blog publik berdasarkan slug.
     */
    public function show(string $slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->firstOrFail();

        // Artikel terkait: kategori sama, bukan artikel ini sendiri
        $related = Blog::with('category')
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('public.informasi.blog-detail', compact('blog', 'related'));
    }
}

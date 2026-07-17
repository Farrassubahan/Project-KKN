<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicProductController extends Controller
{
    /**
     * Halaman daftar produk daur ulang untuk publik.
     */
    public function index()
    {
        $products = Product::latest()->paginate(12);
        return view('public.produk.index', compact('products'));
    }

    /**
     * Halaman detail produk.
     */
    public function show(Product $product)
    {
        $related = Product::where('id', '!=', $product->id)->latest()->take(4)->get();
        return view('public.produk.detail', compact('product', 'related'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BagController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric'
        ]);

        Product::create($request->all());
        return redirect()->back()->with('success', 'Produk berhasil ditambah!');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric'
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk diupdate!');
    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect()->back()->with('success', 'Produk dihapus!');
    }
}
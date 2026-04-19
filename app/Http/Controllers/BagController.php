<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagController extends Controller
{
    public function index()
    {
        $bags = DB::table('bags')->get();
        return view('welcome', compact('bags'));
    }

    public function store(Request $request)
    {
        DB::table('bags')->insert([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga
        ]);
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        DB::table('bags')->where('id', $id)->delete();
        return redirect()->route('index');
    }
}
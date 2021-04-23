<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class HomeController extends Controller
{
    public function home()
    {
        return view ('create');
    }

    public function store(Request $request)
    {
        Produk::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return back();
    }


    public function viewProduct()
    {
        $produks = Produk::all();
        return view ('product', compact('produks'));
    }

  
//     public function about()
//     {
//         return view('about');
//     }

//     public function order()
//     {
//         return view('order');
//     }
 }

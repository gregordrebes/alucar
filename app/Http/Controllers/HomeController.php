<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::whereNotExists(function ($query) {
            $query->select("rent.id_veiculo")->from('rent')->whereColumn("rent.id_veiculo", "=", "products.id");
        })->latest()->paginate(10);
        return view('products.indexHome',compact('products'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}

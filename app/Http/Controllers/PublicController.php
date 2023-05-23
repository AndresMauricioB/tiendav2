<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class PublicController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function info()
    {
        return view('webpage.index', [
            'categories' => Category::where('status', 1)
            ->with(['products' => function ($query) {
                $query->where('status', 1);}])->get(),
            'cart' => Session::get('cart'),
            'total'=> Session::get('total')    
                  
        ]);
    }

}

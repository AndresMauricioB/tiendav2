<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {
        if(!Session::has('cart')) Session::put('cart', []);
        if(!Session::has('total')) Session::put('total', 0);
       
    }

    public function add(Product $product)
    {
        $cart = Session::get('cart');

        if (isset($cart[$product->slug])) {
            $cart[$product->slug]->quantity += 1;
            $cart[$product->slug]->pricetotal = $cart[$product->slug]->price * $cart[$product->slug]->quantity;
        } else {
            $product->quantity = 1;
            $cart[$product->slug] = $product;
        }
        
        Session::put('cart', $cart);
        $this->caltTotal($product->price);
        return redirect('/');
    }

    public function caltTotal($val){

        $total = Session::get('total');
        $total1 = $total + $val;
        Session::put('total', $total1);  
    }

    public function delete()
    {
        Session::flush();
        return redirect('/');
    }


    public function deletet(Product $product)
    {
        $cart = Session::get('cart');
        $total = Session::get('total');
        if (isset($cart[$product])) {
            unset($cart[$product]);
            $total->total = 0;

        }
        Session::put('cart', $total);
        Session::put('cart', $cart);

        return redirect('/cart');
    }
    
}

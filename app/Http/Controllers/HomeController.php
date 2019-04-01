<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       return view('front.home');
   }
   public function products()
   {
       return view('front.products');
   }
   public function product()
   {
       return view('front.product');
   }

}

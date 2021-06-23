<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home()
   {
     return view('welcome')->with(
     ['tasks'=>[
     'Go to stoore',
     'Go to market',
     'Go to work',
     'Go to school'
     ]]
     );
   }



   public function contact()
   {
      return view('contact');
   }


   public function about()
   {
     return view('about');
   }
}

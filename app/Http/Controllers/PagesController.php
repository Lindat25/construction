<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('website.welcome');
    }

   public function about(){
       return view('website.about');
   }

   public function contact(){
       return view('website.contact');
   }


   public function team(){
    return view('website.team');
}


public function services(){
    return view('website.services');
}

public function touch(){
    return view('website.touch');
}

public function casestudies(){
    return view('website.casestudies');
}


}

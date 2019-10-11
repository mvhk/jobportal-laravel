<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel";
        return view("pages.index");
    }
    public function about(){
          return view("pages.about");
    }
    public function services(){
        $title = "Service";
        return view("pages.services")->with("h2title",$title);
    }

}

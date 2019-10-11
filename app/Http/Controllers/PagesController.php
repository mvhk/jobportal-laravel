<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            "title"=>"Home Page",
            "Content"=>"This is dummy content"
        );
        return view("pages.index")->with($data);
    }
    public function about(){
        $data = array(
            "title" => "About Page",
            "Content" => "This is normal content for the about page"
        );
        return view("pages.about")->with($data);
    }
    public function services(){
        $data = array(
            "title" => "Services",
            "services" => ["Web Development","SEO","Graphic designer"]
        );
        return view("pages.services")->with($data);
    }

}

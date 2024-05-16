<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function services()
    {
        return view("services");
    }
    public function policy()
    {
        return view("privacy");
    }
    public function contact()
    {
        return view("contact");
    }
    public function portfolio()
    {
        return view("portfolio");
    }
    public function graphics()
    {
        return view("graphics");
    }
    public function logo()
    {
        return view("logo");
    }
    public function ecommerce()
    {
        return view("ecommerce");
    }
    public function animation2D()
    {
        return view("2D");
    }
    public function animation3D()
    {
        return view("3D");
    }
    public function web()
    {
        return view("web-development");
    }
    public function mobile()
    {
        return view("mobile-app");
    }
    public function seo()
    {
        return view("seo");
    }
    public function packages()
    {
        return view("packages");
    }
    public function testimonials()
    {
        return view("testimonials");
    }
    public function wordpress()
    {
        return view("wordpress");
    }
    public function branding()
    {
        return view("branding");
    }
    public function ppc()
    {
        return view("ppc");
    }
    public function social()
    {
        return view("social");
    }
    public function blogs()
    {
        return view("blogs.blogs");
    }
    public function typesOfLogos()
    {
        return view("blogs.types-of-logos");
    }
}

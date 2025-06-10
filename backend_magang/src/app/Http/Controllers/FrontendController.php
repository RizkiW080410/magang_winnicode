<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\CategoryBerita;

class FrontendController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('user', 'categoryBerita')->latest()->get();
        $categories = CategoryBerita::all();
        $latestNews = Berita::with('user', 'categoryBerita')->latest()->take(6)->get();
        $headlineNews = Berita::with('user', 'categoryBerita')->latest()->take(4)->get();
        return view('frontend.home', compact('beritas', 'categories', 'latestNews', 'headlineNews'));
    }

    public function infopangan()
    {
        $categories = CategoryBerita::all();
        return view('frontend.infopangan', compact('categories'));
    }

    public function infosaham()
    {
        $categories = CategoryBerita::all();
        return view('frontend.infosaham', compact('categories'));
    }

    public function detailberita()
    {
        $categories = CategoryBerita::all();
        return view('frontend.detailberita', compact('categories'));
    }
}

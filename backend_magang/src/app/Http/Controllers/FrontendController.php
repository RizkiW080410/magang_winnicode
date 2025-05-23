<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('user', 'categoryBerita')->latest()->get();
        return view('frontend.index', compact('beritas'));
    }

    public function infopangan()
    {
        return view('frontend.infopangan');
    }

    public function infosaham()
    {
        return view('frontend.infosaham');
    }

    public function detailberita()
    {
        return view('frontend.detailberita');
    }
}

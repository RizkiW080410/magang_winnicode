<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
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

    public function detailberita($id)
    {
        $berita = Berita::with('user', 'categoryBerita')->findOrFail($id);
        $categories = CategoryBerita::all();

        $komentarList = Komentar::with(['user', 'replies.user'])
            ->where('berita_id', $berita->id)
            ->latest()
            ->get();

        return view('frontend.detailberita', compact('berita', 'categories', 'komentarList'));
    }

    public function store(Request $request, Berita $berita)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $berita->komentars()->create([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function storebalasan(Request $request, Komentar $komentar)
    {
        $request->validate(['reply' => 'required']);
        $komentar->replies()->create([
            'user_id' => auth()->id(),
            'reply' => $request->reply,
        ]);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BranchCompany;
use App\Models\Pangan;
use App\Models\Komentar;
use Illuminate\Http\Request;
use App\Models\CategoryBerita;
use App\Models\Company;
use App\Models\Copyright;
use App\Models\Informasi;
use App\Models\SosisalMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class FrontendController extends Controller
{
    public function __construct()
    {
        // untuk semua method di controller ini...
        $this->middleware(function ($request, $next) {
            // jika ada session login tapi role bukan Pengunjung → logout
            if (Auth::check() && ! Auth::user()->hasRole('Pengunjung')) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            }

            return $next($request);
        });
    }
    
    public function index(Request $request)
    {
        if (Auth::check() && ! Auth::user()->hasRole('Pengunjung')) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        $beritas = Berita::with('user', 'categoryBerita')->latest()->get();
        $categories = CategoryBerita::all();
        $latestNews = Berita::with('user', 'categoryBerita')->latest()->take(6)->get();
        $headlineNews = Berita::with('user', 'categoryBerita')->latest()->take(4)->get();
        $pangans = Pangan::orderByDesc('updated_at')
                        ->take(5)
                        ->get();
        $lastUpdate = Pangan::max('last_update')
                    ?: Pangan::max('updated_at');
        $latestPangan = $pangans->first();
        $sumber = $latestPangan->sumber ?? '—';
        $sosial_medias = SosisalMedia::all();
        $compenies = Company::all();
        $branch_companies = BranchCompany::all();
        $informasis = Informasi::all();
        $copyrights = Copyright::all();
        return view('frontend.home', compact('beritas', 'categories', 'latestNews', 'headlineNews', 'pangans', 'lastUpdate', 'sumber', 'sosial_medias',
            'compenies', 'branch_companies', 'informasis', 'copyrights'
        ));
    }

    public function infopangan()
    {
        $categories  = CategoryBerita::all();
        $pangans     = Pangan::orderByDesc('last_update')->get();
        $lastUpdate  = $pangans->max('last_update');
        $latestPangan= $pangans->first();
        $sumber      = $latestPangan->sumber ?? '—';
        $sosial_medias = SosisalMedia::all();
        $compenies = Company::all();
        $branch_companies = BranchCompany::all();
        $informasis = Informasi::all();
        $copyrights = Copyright::all();

        return view('frontend.infopangan', compact(
        'categories','pangans','lastUpdate','sumber','sosial_medias',
            'compenies', 'branch_companies', 'informasis', 'copyrights'
        ));
    }

    public function detailberita($id)
    {
        $berita = Berita::with('user', 'categoryBerita')->findOrFail($id);
        $categories = CategoryBerita::all();

        $komentarList = Komentar::with(['user', 'replies.user'])
            ->where('berita_id', $berita->id)
            ->latest()
            ->get();
        $sosial_medias = SosisalMedia::all();
        $compenies = Company::all();
        $branch_companies = BranchCompany::all();
        $informasis = Informasi::all();
        $copyrights = Copyright::all();

        return view('frontend.detailberita', compact('berita', 'categories', 'komentarList','sosial_medias',
            'compenies', 'branch_companies', 'informasis', 'copyrights'));
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

    public function saveBerita(Berita $berita): RedirectResponse
    {
        auth()->user()->savedBeritas()->syncWithoutDetaching($berita->id);
        return back()->with('success', 'Berita disimpan untuk nanti.');
    }

    public function unsaveBerita(Berita $berita): RedirectResponse
    {
        auth()->user()->savedBeritas()->detach($berita->id);
        return back()->with('success', 'Berita dihapus dari daftar simpanan.');
    }

    public function savedList()
    {
        $categories    = CategoryBerita::all();
        // Ambil semua berita yang disimpan user
        $beritas       = auth()->user()->savedBeritas()->with('categoryBerita','user')->latest('berita_user.created_at')->get();
        $sosial_medias = SosisalMedia::all();
        $compenies = Company::all();
        $branch_companies = BranchCompany::all();
        $informasis = Informasi::all();
        $copyrights = Copyright::all();
        return view('frontend.saved', compact('beritas','categories','sosial_medias',
            'compenies', 'branch_companies', 'informasis', 'copyrights'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'name'       => ['required','string','max:255'],
            'email'      => ['required','email','max:255', Rule::unique('users')->ignore($user->id)],
            'avatar_url' => ['nullable','image','max:2048'], 
        ]);

        // Jika ada upload avatar, simpan dan set path
        if ($request->hasFile('avatar_url')) {
            // Hapus file lama
            if ($user->avatar_url) {
                Storage::disk('public')->delete($user->avatar_url);
            }
            $path = $request->file('avatar_url')->store('avatars', 'public');
            $data['avatar_url'] = $path;
        }

        $user->update($data);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}

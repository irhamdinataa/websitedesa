<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalBerita    = Berita::count();
        $totalProduk    = Umkm::count();
        $viewsToday     = Berita::whereDate('created_at', Carbon::today())->sum('views');
        $beritas        = Berita::orderBy('created_at', 'DESC')->take(10)->get();
        $komentars      = Comment::orderBy('created_at', 'DESC')->take(10)->get();

        return view('admin.dashboard', [
            'totalBerita'    => $totalBerita,
            'totalProduk'    => $totalProduk,
            'viewsToday'     => $viewsToday,
            'beritas'        => $beritas,
            'komentars'      => $komentars
        ]);
    }

}

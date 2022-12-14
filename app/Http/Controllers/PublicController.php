<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index()
    {
        $newBerita = DB::table('beritas')->orderBy('created_at', 'DESC')->limit(3)->get();
        // return dd($newBerita);
        return view('welcome', compact('newBerita'));
    }
    public function berita()
    {
        return view('berita');
    }
    public function pengumuman()
    {
        return view('pengumuman');
    }
    public function tentang()
    {
        return view('tentang');
    }
}

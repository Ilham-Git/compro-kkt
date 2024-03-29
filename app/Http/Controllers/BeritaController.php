<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $berita = Berita::where('judul', 'LIKE', '%' . $request->search . '%')
                ->orWhere('tautan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('updated_at', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(10);
        } else {
            $berita = Berita::sortable()->paginate(10);
        }
        return view('dashboard.berita.index', compact(['berita']));
    }
    public function create()
    {
        return view('dashboard.berita.create');
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|image|max:2000|required',
            'tautan' => 'nullable|active_url|required',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->storeAs('Uploads', 'berita' . time() . '.' . $request->file('gambar')->extension());
        } else {
            $path = '';
        }

        try {
            $data = new Berita;
            $data->judul = $request->judul;
            $data->gambar = $path;
            $data->tautan = $request->tautan;
            $data->save();

            Session()->flash('alert-success', 'berita Berhasil Ditambahkan');
            return redirect('dashboard/berita');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/berita-create')->withInput();
        }
    }
    public function show($id)
    {
        $data = app('App\Models\Berita')->cariBerita($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'berita Tidak Ditemukan');
            return redirect('/dashboard/berita');
        }
        return view('dashboard.berita.show', compact(['data']));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg|image|max:2000',
            'tautan' => 'nullable|active_url',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('Uploads');
        } else {
            $path = '';
        }

        $data = app('App\Models\Berita')->cariBerita($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'berita Tidak Ditemukan');
            return redirect('dasboard/berita');
        }

        try {
            $data = new Berita;
            $pathGambar = $data->gambar;
            if ($pathGambar != null || $pathGambar != '') {
                Storage::delete($pathGambar);
            }

            $data->judul = $request->judul;
            $data->gambar = $path;
            $data->tautan = $request->tautan;
            $data->save();

            Session()->flash('alert-success', 'berita Berhasil Diupdate');
            return redirect('dashboard/berita');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/berita/' . $data->id)->withInput();
        }
    }
    public function delete($id)
    {
        $data = app('App\Models\Berita')->cariBerita($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'Berita Tidak Ditemukan');
            return redirect('dasboard/berita');
        }

        try {
            DB::transaction(function () use (&$data) {
                $data->delete();
            });

            Session()->flash('alert-success', 'Berita Berhasil Dihapus');
            return redirect('dashboard/berita');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/berita/' . $data->id);
        }
    }
    public function forceDelete($id)
    {
        try {
            $data = app('App\Models\Berita')->cariBerita($id);
            $pathGambar = $data->gambar;
            if ($pathGambar != null || $pathGambar != '') {
                Storage::delete($pathGambar);
            }
            app('App\Models\Berita')->cariBerita($id)->forceDelete();

            Session()->flash('alert-success', 'Berita Berhasil Dihapus Permanen');
            return redirect('dashboard/berita');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/berita/' . $data->id);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $berita = Berita::where('judul', 'LIKE', '%' . $request->search . '%')
                ->orWhere('slug', 'LIKE', '%' . $request->search . '%')
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
            'slug' => 'required',
            'tautan' => 'nullable',
        ]);

        try {
            $data = new Berita;
            $data->judul = $request->judul;
            $data->slug = $request->slug;
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
            'slug' => 'required',
            'tautan' => 'nullable',
        ]);

        $data = app('App\Models\Berita')->cariBerita($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'berita Tidak Ditemukan');
            return redirect('dasboard/berita');
        }

        try {
            DB::transaction(function () use ($request, &$data) {
                $data->judul = $request->judul;
                $data->slug = $request->slug;
                $data->tautan = $request->tautan;
                $data->save();
            });

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
            Session()->flash('alert-danger', 'berita Tidak Ditemukan');
            return redirect('dasboard/berita');
        }

        try {
            DB::transaction(function () use (&$data) {
                $data->delete();
            });

            Session()->flash('alert-success', 'berita Berhasil Dihapus');
            return redirect('dashboard/berita');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/berita/' . $data->id);
        }
    }
}

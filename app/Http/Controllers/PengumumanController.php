<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = pengumuman::all();
        return view('dashboard.pengumuman.index', compact(['pengumuman']));
    }
    public function create()
    {
        return view('dashboard.pengumuman.create');
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'konten' => 'required',
            'tautan' => 'nullable',
        ]);

        try {
            $data = new Pengumuman;
            $data->judul = $request->judul;
            $data->konten = $request->konten;
            $data->tautan = $request->tautan;
            $data->save();

            Session()->flash('alert-success', 'Pengumuman Berhasil Ditambahkan');
            return redirect('dashboard/pengumuman/' . $data->id);
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/pengumuman-create')->withInput();
        }
    }
    public function show($id)
    {
        $data = app('App\Models\Pengumuman')->cariPengumuman($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'Pengumuman Tidak Ditemukan');
            return redirect('/dashboard/pengumuman');
        }
        return view('dashboard.pengumuman.show', compact(['data']));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'konten' => 'required',
            'tautan' => 'nullable',
        ]);

        $data = app('App\Models\Pengumuman')->cariPengumuman($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'Pengumuman Tidak Ditemukan');
            return redirect('dasboard/pengumuman');
        }

        try {
            DB::transaction(function () use ($request, &$data) {
                $data->judul = $request->judul;
                $data->konten = $request->konten;
                $data->tautan = $request->tautan;
                $data->save();
            });

            Session()->flash('alert-success', 'Pengumuman Berhasil Diupdate');
            return redirect('dashboard/pengumuman/' . $data->id);
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/pengumuman/' . $data->id)->withInput();
        }
    }
    public function delete($id)
    {
        $data = app('App\Models\Pengumuman')->cariPengumuman($id);

        if (empty($data)) {
            Session()->flash('alert-danger', 'Pengumuman Tidak Ditemukan');
            return redirect('dasboard/pengumuman');
        }

        try {
            DB::transaction(function () use (&$data) {
                $data->delete();
            });

            Session()->flash('alert-success', 'Pengumuman Berhasil Dihapus');
            return redirect('dashboard/pengumuman');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/pengumuman/' . $data->id);
        }
    }
}

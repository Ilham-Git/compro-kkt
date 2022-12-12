@extends('dashboard.layouts.dashtemp')

@section('main')
    {{-- <h1>Pengumuman</h1> --}}
    {{-- @include('error.message') --}}
    {{-- <a href="{{ url('/dashboard/pengumuman-create') }}" class="btn btn-success">Tambah Pengumuman</a> --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">
                <i class="bi bi-table ms-2"></i> Data Pengumuman
            </h3>
        </div>
        @include('error.message')
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <a href="{{ url('/dashboard/pengumuman-create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Tambah Data</a>
                </div>
                <br>
                <table id="example1" class="table table-bordered table-striped text-center align-middle p-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tautan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pengumuman as $p)
                            <tr>
                                <td>
                                    {{ $no++ }}
                                </td>
                                <td>
                                    {{ $p->judul }}
                                </td>
                                <td>
                                    {{ $p->konten }}
                                </td>
                                <td>
                                    {{ $p->tautan }}
                                </td>
                                <td>
                                    {{ $p->created_at }}
                                </td>
                                <td>
                                    <a href="{{ url('dashboard/pengumuman/' . $p->id) }}" title="Ubah"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="{{ url('dashboard/pengumuman-delete/' . $p->id) }}"
                                        onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus"
                                        class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    @endsection

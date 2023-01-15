@extends('dashboard.layouts.dashtemp')

@section('main')
    <div class="card card-primary">
        <div class="card card-info ">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="bi bi-table ms-3"></i> Data Berita
                </h3>
            </div>
            @include('error.message')
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <div class="ms-2">
                        <a href="{{ url('/dashboard/berita-create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Tambah Data</a>
                        <p></p>
                        <form method="GET" action="berita/" class="form-inline my-2 my-lg-0 col-md-4">
                            <div class="input-group">
                                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                                    aria-label="Pencarian">
                                <span>
                                    <button type="submit" class="btn btn-primary ms-2">Cari</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <br>
                    <table id="example1" class="table table-bordered table-striped text-center align-middle p-0">
                        <thead>
                            <tr>
                                <th>@sortablelink('id', 'No')</th>
                                <th>@sortablelink('judul', 'Judul Berita')</th>
                                <th>@sortablelink('tautan', 'Tautan')</th>
                                <th>Gambar</th>
                                <th>@sortablelink('updated_at', 'Tanggal')</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($berita as $index => $b)
                                <tr>
                                    <td>
                                        {{ $index + $berita->firstItem() }}
                                    </td>
                                    <td>
                                        {{ $b->judul }}
                                    </td>
                                    <td>
                                        {{ $b->tautan }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $b->gambar) }}" alt="Gambar" class="img-thumbnail"
                                            style="width:100px">
                                    </td>
                                    <td>
                                        {{ $b->updated_at }}
                                    </td>
                                    <td>
                                        <a href="{{ url('dashboard/berita/' . $b->id) }}" title="Ubah"
                                            class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{ url('dashboard/berita-delete/' . $b->id) }}"
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
                    {{-- {{ $berita->links() }} --}}
                    <div class="ms-1">{!! $berita->appends(Request::except('page'))->render() !!}</div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    @endsection

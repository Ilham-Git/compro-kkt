@php
    if (old()) {
        $judul = old('judul');
        $slug = old('slug');
        $tautan = old('tautan');
    } else {
        $judul = null;
        $slug = null;
        $tautan = null;
    }
@endphp

@extends('dashboard.layouts.dashtemp')

@section('judul')
    Create Berita
@endsection

@section('main')
    <div class="container">
        <h2>Tambah Berita</h2>

        <form method="post" action="{{ url('/dashboard/berita-create') }}" onsubmit="return konfirmasi()"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-floating mb-3">
                        <input type="text" name="judul"
                            class="form-control @error('judul')
                        is-invalid
                    @enderror"
                            id="floatingInput" value="{{ $judul }}" placeholder="Judul">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="floatingInput">Judul Berita</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-floating">
                        <textarea name="slug"
                            class="form-control @error('slug')
                        is-invalid
                    @enderror"
                            placeholder="Slug" id="floatingTextarea2" style="height: 100px">{!! $slug !!}</textarea>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="floatingTextarea2">Slug Berita</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="basic-url" class="form-label">Gambar Berita</label>
                <div class="col-md-10">
                    <input type="file" name="gambar" id="gambar"
                        class="form-control @error('gambar')
                        is-invalid
                    @enderror"
                        accept="image/*">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label for="basic-url" class="form-label mt-3">Tautan Berita</label>
                <div class="col-md-10">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/</span>
                        <input type="teaxt" name="tautan"
                            class="form-control @error('tautan')
                        is-invalid
                    @enderror"
                            id="basic-url" value="{{ $tautan }}" aria-describedby="basic-addon3">
                        @error('tautan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

@section('dashboard-extrajs')
    <script>
        function konfirmasi() {
            var r = confirm('Lanjutkan Penyimpanan Data?');
            if (r) {
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection

@php
    if (old()) {
        $judul = old('judul');
        $konten = old('konten');
        $tautan = old('konten');
    } else {
        $judul = $data->judul;
        $konten = $data->konten;
        $tautan = $data->tautan;
    }
@endphp

@extends('dashboard.layouts.dashtemp')

@section('judul')
    Update Pengumuman
@endsection

@section('main')
    <div class="container">
        <h2>Update Pengumuman</h2>

        @include('error.message')

        <form method="post" action="{{ url('/dashboard/pengumuman/' . $data->id) }}" onsubmit="return konfirmasi()">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="form-floating mb-3">
                        <input type="text" name="judul" class="form-control" id="floatingInput"
                            value="{{ $judul }}" placeholder="Judul">
                        <label for="floatingInput">Judul Pengumuman</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-floating">
                        <textarea name="konten" class="form-control" placeholder="Konten" id="floatingTextarea2" style="height: 100px">{!! $konten !!}</textarea>
                        <label for="floatingTextarea2">Konten Pengumuman</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="basic-url" class="form-label mt-3">Tautan Pengumuman</label>
                <div class="col-md-10">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Contoh: https://example.com/</span>
                        <input type="text" name="tautan" class="form-control" id="basic-url" value="{{ $tautan }}"
                            aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <br>
            <a href="{{ url('/dashboard/pengumuman-delete/' . $data->id) }}" class="btn btn-danger"
                onclick="return konfirmasi('Hapus Data?')">Delete</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@section('dashboard-extrajs')
    {{-- <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ckeditor'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}
    <script>
        function konfirmasi() {
            var r = confirm('Lanjutkan Update Data?');
            if (r) {
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection

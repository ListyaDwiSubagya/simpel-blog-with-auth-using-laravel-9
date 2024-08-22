{{-- create --}}
@extends('layout.app')

@section('title', 'Buat Postingan')


@section('content')
    <h1>Buat Postingan</h1>

    <form method="POST" action=" {{url('posts')}} " class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@extends('master')

@section('content')

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<section class="tulis-resep mb-3">
    <div class="container">
        <h1 class="text-center">Edit Resep</h1>
        <form method="POST" action="/recipe/{{ $recipe->id }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama-makanan">Nama Makanan</label>
                <input type="text" class="form-control" name="recipe_name" id="recipe_name" value="{{ $recipe->recipe_name }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="description" id="description" rows="4">{{ $recipe->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="alat-masak">Alat Masak</label>
                <textarea class="form-control" name="tools" id="ckeditor1" rows="4">{{ $recipe->tools }}</textarea>
            </div>
            <div class="form-group">
                <label for="bahan">Bahan - Bahan</label>
                <textarea class="form-control" name="ingredients" id="ckeditor2" rows="4">{{ $recipe->ingredients }}</textarea>
            </div>
            <div class="form-group">
                <label for="cara-masak">Cara Masak</label>
                <textarea class="form-control" name="how_to_make" id="ckeditor3" rows="4">{{ $recipe->how_to_make }}</textarea>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <img width="75%" src="{{ asset('filesdat/'.$recipe->image) }}" alt="Gambar Makanan">
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Thumbnail</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <script>
                CKEDITOR.replace( 'ckeditor1' );
                CKEDITOR.replace( 'ckeditor2' );
                CKEDITOR.replace( 'ckeditor3' );
            </script>
                <button type="submit" class="btn btn-primary btn-block mb-2"><i class="fas fa-paper-plane pr-2"></i>Ubah Resep</button>
            </form>
            <form action="/recipe/{{ $recipe->id }}" method="post">
            @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash pr-2"></i>Hapus Resep</button>
            </form>
    </div>
</section>

@endsection
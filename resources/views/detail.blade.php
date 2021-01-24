@extends('master')

@section('content')

<section class="detail-content">
    <div class="container">
        <div class="text-center">
            <img class="card-img-top mb-4 mt-2" style="width: 75%" src="{{ asset('filesdat/'.$recipe->image) }}" alt="Gambar Resep">
        </div>
            <h1 class="mb-2">
            {{ $recipe->recipe_name }}
        </h1>
        <h2 class="text-capitalize mb-4">
            Ditulis oleh : {{ $recipe->user->name . ' - Dipublikasi Tanggal ' . date('d/m/Y', strtotime($recipe->created_at)) }}
        </h2>
        <div class="detail-resep">
            <!-- <div class="row"> -->
            <h2 class="head">Deskripsi</h2>
            <h2 class="body mb-4">{{ $recipe->description }}</h2>

            <h2 class="head">Alat Masak</h2>
            <h2 class="body mb-4">{!! $recipe->tools !!}</h2>

            <h2 class="head">Bahan</h2>
            <h2 class="body mb-4">{!! $recipe->ingredients !!}</h2>

            <h2 class="head">Cara Masak</h2>
            <h2 class="body mb-4">{!! $recipe->how_to_make !!}</h2>
            <!-- </div> -->
        </div>
    </div>
</section>
<!-- content -->

@endsection
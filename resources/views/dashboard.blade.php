@extends('master')

@section('content')

<!-- Header -->
<header>
    <div class="container mt-5 mb-5">
        <h1 class="text-capitalize">ResepKu</h1>
    </div>
</header>
<!-- Akhir Header -->
<!-- card Resep -->
<section class="card-resep mb-4">
    <div class="container">
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-md-6 col-12 col-lg-4">
                    <div class="card">
                        <a href="{{ route('recipe.show', $recipe->id) }}">
                            <img class="card-img-top" src="{{ asset('filesdat/'.$recipe->image) }}" alt="Gambar Resep">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                        <p class="card-text">{{ $recipe->description }}</p>
                            <hr>
                            <div class="row justify-content-around">
                                <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-detail">Lihat Detail</a>
                                <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn btn-edit">Edit Resep</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- akhir card resep -->

@endsection
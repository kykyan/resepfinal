@extends('master')

@section('content')

<!-- Header -->
<header>
    <div class="container mt-5 mb-5">
        <h1 class="text-capitalize">Mari tulis resep terlezat anda</h1>
            @if(Route::has('login'))
                @auth
                    <a href="{{ route('tulisresep') }}" class="btn btn-custom-primary my-2 my-sm-0">
                        <i class="fas fa-plus pr-2" aria-hidden="true"></i>Tulis Resep
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-custom-primary my-2 my-sm-0">
                        <i class="fas fa-plus pr-2" aria-hidden="true"></i>Tulis Resep
                    </a>
                @endauth
            @endif
        <div class="row mt-4">
            <div class="col">
                <img src="{{ asset ('img/icon/banner.png') }}" class="w-100 rounded" alt="Banner">
            </div>
        </div>
    </div>
</header>
<!-- Akhir Header -->
<!-- card Resep -->
<section class="card-resep mb-4">
    <div class="container">
        <div class="row title">
            <div class="col-md-6 col-lg-12">
                <h1>cari resep yang akan anda buat</h1>
                <p>Masak dengan resep yang pas akan membuat makanan anda terasa nikmat dan puas</p>
            </div>
        </div>
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-md-6 col-12 col-lg-4">
                    <div class="card w-100">
                        <a href="{{ route('recipe.show', $recipe->id) }}">
                            <img class="card-img-top" src="{{ asset('filesdat/'.$recipe->image) }}" alt="Gambar Resep">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                        <p class="card-text">{{ $recipe->description }}</p>
                            <hr>
                            <div class="text-right">
                            <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-detail">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- akhir card resep -->

{{ $recipes->links() }}

@endsection
@extends('master')

@section('content')

<!-- Deskription -->
    <section class="description">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <p class="text-justify" style="text-indent: 50px;">ResepKita merupakan website yang menyediakan resep dimana semua orang dapat membagikan resep makanan yang mereka bikin supaya orang lain dapat menikmati makanan yang mereka buat. serta membagikan momen makan bersama keluarga menjadi memuaskan karena dengan resep yang sesuai membuat makanan terasa lezat.
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- akhir description -->

<!-- Contact -->
<section class="section-contact">
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-12 col-md-4 ">
                <p style="font-size: 32px;" class="text-center">
                    About Us
                </p>
            </div>
        </div>
        <div class="row m-4">
            <div class="col">
                <img src="{{ asset ('img/icon/banner2.png') }}" class="w-100 rounded" alt="Banner">
            </div>
        </div>
        <div class="col col-mb-5">
            <div class="col">
                <p style="font-size: 24px;">ResepKita merupakan website yang menyediakan resep dimana semua orang dapat membagikan resep makanan yang mereka bikin supaya orang lain dapat menikmati makanan yang mereka buat. serta membagikan momen makan bersama keluarga menjadi memuaskan karena dengan resep yang sesuai membuat makanan terasa lezat.</p>
            </div>
        </div>
    </div>
</section>
<!-- akhir Contact -->

@endsection
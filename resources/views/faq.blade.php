@extends('master')

@section('content')

<!-- FAQ -->
<div class="container" style="margin-top: 120px;">
        <h1 class="text-center mb-4">Frequently Asked Questions</h1>
    </div>

    <section class="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="card shadow-lg">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Bagaimana cara menulis resep ?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Untuk menulis resep anda harus terlebih dahulu <a href=/login>Login</a> menggunakan akun yang telah terdaftar
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Bagaimana cara membuat akun ?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Untuk membuat akun, anda hanya perlu mengakses halaman login, kemudian klik tombol <a href=/register>Sign Up</a> dan masukkan data diri anda.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Bagaimana cara mengubah Resep yang sudah kita buat ?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Untuk mengubah resep yang sudah anda buat, anda harus melakukan Login terlebih dahulu. Kemudian anda dapat mengakses ke halaman <a href='{{ route('dashboard') }}'>Dashboard</a> dan anda dapat memilih resep yang akan diubah kemudian klik Edit Resep. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Bagaimana cara menghapus Resep yang sudah kita buat ?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Untuk menghapus resep yang sudah anda buat, anda harus melakukan Login terlebih dahulu. Kemudian anda dapat mengakses ke halaman <a href='{{ route('dashboard') }}'>Dashboard</a> dan anda dapat memilih resep yang akan dihapus kemudian klik Edit Resep dan pada bagian bawah anda dapat memilih Delete Recipe 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir FAQ -->

    @endsection
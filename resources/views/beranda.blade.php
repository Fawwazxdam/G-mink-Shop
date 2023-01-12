@extends('layouts.index')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card bg-gradient-primary" style="width: 100%; height: 40vh;">
                    <div class="card-body">
                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                            <h1 class="text-light">HALO GAES </h1>
                        </div>
                        {{-- <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="..."> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card bg-gradient-info" style="width: 100%; height: 40vh;">
                    <div class="card-body">
                        <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                {{-- <img src="{{ asset('src/img/illustrations/rocket-white.png') }}" class="d-block w-50" alt="..."> --}}
            </div>
            <div class="carousel-item">
                <div class="card bg-gradient-success" style="width: 100%; height: 40vh;">
                    <div class="card-body">
                        <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="...">
                    </div>
                </div>
                {{-- <img src="{{ asset('src/img/illustrations/rocket-white.png') }}" class="d-block w-50" alt="..."> --}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class="text-center mt-5">Pilih Game</h1>
    <div class="row container">
        <div class="col-1">
            <div class="card p-3" style="width: 18rem;">
                <a href="/topup">
                    <img src="{{ asset('src/img/illustrations/rocket-white.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Mobile Legend Bang-Bang</h5>
                        {{-- <p class="card-text">Mobile Legend Bang-Bang</p> --}}
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row pb-5 mt-5">

        <div class="col-5">
            <div class="container-fluid">
                <h1 class="text-center mt-5">MLBB Diamond</h1>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <p class="mb-1 pt-2 text-bold">Your top up partner</p>
                                    <h5 class="font-weight-bolder">Frodo G-mink</h5>
                                    <p class="mb-5">From MLBB Diamond, PUBGM UC, FF Diamond, PB Cash, Etc. :)</p>
                                    <p></p>
                                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                        href="javascript:;">
                                        Read More
                                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                <div class="bg-gradient-primary border-radius-lg h-100">
                                    <img src="{{ asset('src/img/shapes/waves-white.svg') }}"
                                        class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        <img class="w-100 position-relative z-index-2 pt-4"
                                            src="{{ asset('src/img/illustrations/rocket-white.png') }}" alt="rocket">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-7">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-body p-3">
                        <div class="d-flex flex-column h-100 ps-3 pe-3">
                            <h4 class="font-weight-bolder text-primary mb-3">E-mail</h4>
                            <input type="text" class="form-control mb-3" placeholder="E-mail">
                            <p class="text-xs text-primary ms-auto">*opsional</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="card shadow mb-4">
                    <div class="card-body p-3">
                        <div class="d-flex flex-column h-100 ps-3 pe-3">

                        </div>
                    </div>
                </div> --}}
                <div class="card shadow mb-4">
                    <div class="card-body p-3">
                        <div class="d-flex flex-column h-100 ps-3 pe-3">
                            <form action="{{ route('topup.store') }}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h4 class="font-weight-bolder text-primary mb-3">Masukkan ID dan Server anda</h4>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="ID anda"
                                                    name="user">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Server anda"
                                                    name="area">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-body p-3">
                        <div class="d-flex flex-column h-100 ps-3 pe-3">
                            <div class="row">
                                <div class="col-sm-4">

                                    <div class="d-flex flex-column mt-3 mb-3">
                                        <h6 class="mb-3">Pilih Diamond</h6>
                                        {{-- @foreach ($data as $produk)
                                            <div class="form-check mb-3">
                                                <div class="bg-primary">
                                                    <input class="form-check-input" type="radio" name="dm" value="{{$produk->produk_kode}}">
                                                </div>
                                                <label class="custom-control-label" for="customRadio1">{{$produk->nama}}</label>
                                            </div>
                                            @endforeach --}}
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tumbas</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

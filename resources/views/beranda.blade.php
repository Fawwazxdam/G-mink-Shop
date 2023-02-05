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
                <div class="card bg-gradient-primary" style="width: 100%; height: 50vh;">
                    <div class="card-body">
                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                            <h1 class="text-light">HALO GAES, WELCOME TO FRODO G-mink !</h1>
                        </div>
                        {{-- <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="..."> --}}
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card bg-gradient-info" style="width: 100%; height: 50vh;">
                    <div class="card-body">
                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                            <h1 class="text-light">Tempat topup andalan klean semua</h1>
                        </div>
                        {{-- <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="..."> --}}
                    </div>
                </div>
                {{-- <img src="{{ asset('src/img/illustrations/rocket-white.png') }}" class="d-block w-50" alt="..."> --}}
            </div>
            <div class="carousel-item">
                <div class="card bg-gradient-success" style="width: 100%; height: 50vh;">
                    <div class="card-body">
                        <div class="position-relative d-flex align-items-center justify-content-center h-100">
                            <h1 class="text-light">Anda puas bilang teman, anda tidak puas bilang kami !</h1>
                        </div>
                        {{-- <img src="{{ asset('src/img/shapes/waves-white.svg') }}" class="card-img-top" alt="..."> --}}
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
    <div class="container">


        <div class="row">
            <div class="col mt-3">
                <div class="card p-3 bg-gradient-primary" style="width: 18rem;">
                    <a href="/topup">
                        <img src="{{ asset('src/img/mlbb logo p.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body bg-white rounded">
                            <h5 class="card-text">Mobile Legend Bang-Bang</h5>
                            {{-- <p class="card-text">Mobile Legend Bang-Bang</p> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card p-3 bg-gradient-primary" style="width: 18rem;">
                    <a href="/topup">
                        <img src="{{ asset('src/img/PB logo.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body bg-white rounded">
                            <h5 class="card-text">Ponit Blank Beyond Limit CASH</h5>
                            {{-- <p class="card-text">Mobile Legend Bang-Bang</p> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col mt-3">
                <div class="card p-3 bg-gradient-primary" style="width: 18rem;">
                    <a href="/topup">
                        <img src="{{ asset('src/img/PUBGM logo.png') }}" class="card-img-top mb-1"
                            alt="...">
                        <div class="card-body bg-white rounded">
                            <h5 class="card-text">PUBG Mobile UC</h5>
                            {{-- <p class="card-text">Mobile Legend Bang-Bang</p> --}}
                        </div>
                    </a>
                </div>
            </div>
            {{-- <div class="col mt-3">
                <div class="card p-3" style="width: 18rem;">
                    <a href="/topup">
                        <img src="{{ asset('src/img/illustrations/rocket-white.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-text">Diamond Free Fire</h5>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="row pb-5 mt-5">

    </div>
@endsection

@extends('layouts.primary')
@section('content')
    <h1 class="text-center mt-4">DASHBOARD</h1>
    <form action="{{ route('dashboard.store') }}" method="post">
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Masukkan ID dan Server anda</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="ID anda" name="user">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Server anda" name="area">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cek</button>
    </form>
    <div class="mb-5">
    @isset($username)
        <h5>Username Anda : {{ $username->username }}</h5>
    @endisset
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
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
        <div class="col-lg-5">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                    style="background-image: url('{{ asset('src/img/ivancik.jpg') }}');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Play With Pride</h5>
                        <p class="text-white">After topuping your game account at our store, you will play with pride.
                            And use your best skin in game.!</p>
                        <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

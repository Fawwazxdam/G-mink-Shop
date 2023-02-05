@extends('layouts.index')
@section('content')
    <div class="row pb-5">
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
                                <div class=" border-radius-lg h-100">
                                    <img src="{{ asset('src/img/shapes/waves-white.svg') }}"
                                        class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        <img class="w-100 position-relative z-index-2 pt-4"
                                            src="{{ asset('src/img/diamond.png') }}" alt="rocket">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <q>asasa</q>
                <cite>asd</cite>
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
                                    <div class="d-flex flex-column mt-3 mb-3">
                                        <h6 class="mb-3">Pilih Diamond</h6>
                                        <div class="form-check mb-3">
                                            @foreach ($data as $produk)
                                                <input type="radio" class="btn-check" name="dm"
                                                    value="{{ $produk->deskripsi }}" id="{{ $produk->id }}"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-primary"
                                                    for="{{ $produk->id }}">{{ $produk->nama }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                            <button type="submit" class="btn btn-primary">Tumbas</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @isset($result)
                <div class="card m-5">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Order Information</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <form action="" method="">
                                    @csrf
                                    <div class="d-flex flex-column mb-3">
                                        {{-- @foreach ($result as $hasil) --}}
                                        <h6 class="mb-3 text-sm">Username : {{ $result->nick_name }}</h6>
                                        <span class="mb-2 text-xs">Nama Produk : <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $result->nama_produk }}</span></span>
                                        <span class="mb-2 text-xs">Kode: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $result->produk_kode }}</span></span>
                                        <span class="text-xs">Harga: Rp.<span class="text-dark ms-sm-2 font-weight-bold"
                                                id="harga">{{ $result->harga }}</span></span>
                                        {{-- @endforeach --}}
                                        <button class="btn btn-primary mt-3" id="bayarlaa"
                                            onclick="bayar({{ $result->id }})">Check Out</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endisset
        </div>
    </div>
@endsection

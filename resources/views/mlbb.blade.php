@extends('layouts.primary')
@section('content')
    <h1 class="text-center mt-5">MLBB Diamond</h1>
    <div class="container-fluid">
        <form action="{{ route('topup.store') }}" method="post">
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
            <div class="row">
                <div class="col-sm-4">

                    <div class="d-flex flex-column mt-3 mb-3">
                        <h6 class="mb-3">Pilih Diamond</h6>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="dm" id="customRadio1" value="UPMBL5">
                            <label class="custom-control-label" for="customRadio1">5 Diamond</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="dm" id="customRadio2" value="UPMBL12">
                            <label class="custom-control-label" for="customRadio2">12 Diamond</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tumbas</button>
        </form>
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
                                <button class="btn btn-primary" id="bayarlaa" onclick="bayar({{ $result->id }})">Check Out</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    @endisset
@endsection

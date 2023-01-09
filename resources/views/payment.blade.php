@extends('layouts.primary')
@section('content')
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
                            @isset($result)
                                <h6 class="mb-3 text-sm">Username : {{ $result->nick_name }}</h6>
                                <span class="mb-2 text-xs">Nama Produk : <span
                                        class="text-dark font-weight-bold ms-sm-2">{{ $result->nama_produk }}</span></span>
                                <span class="mb-2 text-xs">Kode: <span
                                        class="text-dark ms-sm-2 font-weight-bold">{{ $result->produk_kode }}</span></span>
                                <span class="text-xs">Harga: Rp.<span class="text-dark ms-sm-2 font-weight-bold"
                                        id="harga">{{ $result->harga }}</span></span>
                                {{-- @endforeach --}}
                                <button class="btn btn-primary" onclick="bayar({{$result->id}})">Check Out</button>
                            @endisset
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
@endsection

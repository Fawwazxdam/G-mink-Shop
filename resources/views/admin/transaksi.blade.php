@extends('layouts.primary')
@section('content')
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Transaksi</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th> --}}
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $transaksi)
        <tr>
            <td>
                <p class="text-xs ps-3 font-weight-bold mb-0">{{$loop->iteration}}</p>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">{{$transaksi->ref_id}}</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">{{$transaksi->tujuan}}</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">{{$transaksi->nama_produk}}</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">Rp. {{$transaksi->harga}}</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    @if($transaksi->status == 'Pending')
                    <h6 class="mb-0 text-sm text-warning">{{$transaksi->status}}</h6>
                    @else
                    <h6 class="mb-0 text-sm text-success">{{$transaksi->status}}</h6>
                    @endif
                </div>
            </td>
            {{-- <td class="align-middle text-center text-sm">
                <a href="#" class="badge badge-sm bg-gradient-warning">Edit</a>
                |
                <a href="#" class="badge badge-sm bg-gradient-danger">Delete</a>
            </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
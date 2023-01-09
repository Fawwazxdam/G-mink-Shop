@extends('layouts.primary')
@section('content')
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            <th class="text-secondary opacity-7"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <p class="text-xs ps-3 font-weight-bold mb-0">1</p>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">(Produk)</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">(Deskripsi)</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">(Kategori)</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">Rp. (Harga)</h6>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1">
                    <h6 class="mb-0 text-sm">(Status)</h6>
                </div>
            </td>
            <td class="align-middle text-center text-sm">
                <a href="#" class="badge badge-sm bg-gradient-warning">Edit</a>
                |
                <a href="#" class="badge badge-sm bg-gradient-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
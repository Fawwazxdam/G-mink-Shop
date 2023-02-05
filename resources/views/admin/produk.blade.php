@extends('layouts.primary')
@section('content')
    <button type="button" class="badge badge-sm bg-gradient-info mt-3 ms-4" data-bs-toggle="modal" data-bs-target="#add">Add
        New</button>
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Produk</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                <th class="text-secondary opacity-7"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $produk)
                <tr>
                    <td>
                        <p class="text-xs ps-3 font-weight-bold mb-0">{{ $loop->iteration }}</p>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">{{ $produk->nama }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <img src="{{ asset('storage/'.$produk->foto) }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">{{ $produk->deskripsi }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">{{ $produk->kategori->nama_kategori }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">Rp. {{ $produk->harga }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-xs text-success">{{ $produk->status }}</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <button type="button" class="badge badge-sm bg-gradient-warning" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $produk->id }}">Edit</button>
                        |
                        <button class="badge badge-sm bg-gradient-danger"><a
                                href="{{ url('delpro/' . $produk->id) }}">Delete</a></button>
                    </td>
                </tr>

                {{-- MODAL EDIT --}}
            <div class="modal fade" id="edit{{$produk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('produk.update',$produk->id)}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama" value="{{$produk->nama}}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Foto</label><br>
                                    <img src="{{ asset('storage/'.$produk->foto) }}" alt="" width="100px">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Deskripsi Produk</label>
                                    <input type="text" class="form-control" name="deskripsi" value="{{$produk->deskripsi}}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select class="form-control" name="kategori_id">
                                        <option value="" >Pilih Kategori</option>
                                        @foreach ($data2 as $item)
                                        <option value="{{ $item->id }}" @selected($produk->kategori_id==$item->id) >{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Rp." value="{{$produk->harga}}" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END MODAL EDIT --}}

            @endforeach
        </tbody>
    </table>

    {{-- MODAL ADD --}}
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Foto</label><br>
                            <input type="file" name="foto" id="" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Deskripsi Produk</label>
                            <input type="text" class="form-control" name="deskripsi">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-control" name="kategori_id">
                                <option disabled selected>Pilih Kategori</option>
                                @foreach ($data2 as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Rp.">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Add New</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.primary')
@section('content')
    <button type="button" class="badge badge-sm bg-gradient-info mt-3 ms-4" data-bs-toggle="modal" data-bs-target="#add">Add
        New</button>
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
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
                        <h6 class="mb-0 text-sm">(Kategori)</h6>
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
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-gradient-success">Add New</button>
                </div>
            </div>
        </div>
    </div>
@endsection

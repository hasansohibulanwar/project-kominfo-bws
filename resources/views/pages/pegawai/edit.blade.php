@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h3 class="mb-0">Edit Pegawai</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $pegawai->name }}" required>
                                <label for="name">Nama</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $pegawai->email }}" required>
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $pegawai->phone_number }}" required>
                                <label for="phone_number">No HP</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" required>
                                <label for="alamat">Alamat</label>
                            </div>

                            <div class="form-group mb-3">
                                <label for="avatar" class="form-label">Foto:</label>
                                @if ($pegawai->avatar == null)
                                    <p class="text-danger">Tidak Ada Foto</p>
                                @else
                                    <img class="img-thumbnail mb-3" src="{{ asset('storage/' . $pegawai->avatar) }}" alt="{{ $pegawai->name }}" width="100">
                                @endif
                                <input type="file" class="form-control-file" id="avatar" name="avatar">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .form-floating {
            position: relative;
        }

        .form-floating input {
            height: calc(3.5rem + 2px);
            padding: 1rem .75rem;
            border: 1px solid #ccc;
            border-radius: .375rem;
            transition: border-color .3s ease;
        }

        .form-floating input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
        }

        .form-floating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem .75rem;
            pointer-events: none;
            transition: all .2s ease;
            color: #777;
        }

        .form-floating input:focus + label,
        .form-floating input:not(:placeholder-shown) + label {
            top: -.75rem;
            left: .75rem;
            padding: 0 .25rem;
            background: #fff;
            font-size: .75rem;
            color: #007bff;
        }

        .form-floating input:focus + label {
            color: #0056b3;
        }

        table.table-hover {
            border-collapse: separate;
            width: 100%;
            margin-top: 1.5rem;
            border-spacing: 0;
            border-radius: .375rem;
            overflow: hidden;
            font-size: 0.875rem; /* Smaller font size */
        }

        table.table-hover th,
        table.table-hover td {
            padding: 0.5rem; /* Smaller padding */
            text-align: left;
            border: 1px solid #ddd;
        }

        table.table-hover th {
            background-color: #f2f2f2;
            color: #000;
        }

        table.table-hover tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table.table-hover tr:hover {
            background-color: #f1f1f1;
        }

        .card {
            border: none;
            border-radius: .375rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-header {
            background-color: #343a40 !important; /* Ensures dark background */
        }

        .card-header h3 {
            color: #fff; /* Ensures white text */
        }
    </style>
@endpush

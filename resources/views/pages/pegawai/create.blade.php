@extends('layouts.dashboard')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h3 class="card-title mb-0">Tambah Pegawai</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control border border-dark" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control border border-dark" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label">No HP</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control border border-dark">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control border border-dark"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Foto</label>
                        <input type="file" name="avatar" id="avatar" class="form-control border border-dark">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

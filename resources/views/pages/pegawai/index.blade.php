@extends('layouts.dashboard')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-4 text-center">Daftar Pegawai</h3>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <div class="col-md-4">
                <form action="{{ route('pegawai.index') }}" method="GET" class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Cari Pegawai..." aria-label="Cari Pegawai" aria-describedby="button-search">
                    <button class="btn btn-outline-secondary" type="submit" id="button-search">Cari</button>
                </form>
            </div>
            <div>
                <a href="{{ route('pegawai.create') }}" class="btn btn-info">Tambah Pegawai</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th>Avatar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone_number }}</td>
                            <td>{{ $employee->alamat }}</td>
                            <td>
                                @if($employee->avatar)
                                    <img src="{{ Storage::url($employee->avatar) }}" alt="Avatar" class="rounded-circle" width="50">
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('pegawai.edit', $employee->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form action="{{ route('pegawai.destroy', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

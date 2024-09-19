@extends('layouts.app') <!-- Assuming you have a layout -->

@section('content')
<div class="container">
    <h1>Daftar Laporan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($laporan->isEmpty())
        <div class="alert alert-info">Belum ada laporan yang tersedia.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Laporan</th>
                    <th>Klasifikasi</th>
                    <th>Tanggal Kejadian</th>
                    <th>Lokasi</th>
                    <th>Instansi Tujuan</th>
                    <th>Kategori</th>
                    <th>Isi Laporan</th>
                    <th>Privasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporan as $index => $lapor)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $lapor->title }}</td>
                    <td>{{ $lapor->classification }}</td>
                    <td>{{ \Carbon\Carbon::parse($lapor->date)->format('d M Y') }}</td>
                    <td>{{ $lapor->location }}</td>
                    <td>{{ $lapor->institution }}</td>
                    <td>{{ $lapor->category }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($lapor->content, 50) }}</td>
                    <td>
                        <span class="badge {{ $lapor->privacy == 'public' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($lapor->privacy) }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

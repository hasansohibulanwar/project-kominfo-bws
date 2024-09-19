{{-- resources/views/pages/lapor/create.blade.php --}}

@extends('layouts.app') {{-- Sesuaikan dengan layout utama Anda --}}

@section('content')
<div class="container">
    <h2>Buat Laporan Baru</h2>

    {{-- Tampilkan pesan error jika validasi gagal --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lapor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="classification">Klasifikasi Laporan:</label>
            <input type="text" class="form-control" name="classification" id="classification" required>
        </div>

        <div class="form-group">
            <label for="title">Judul Laporan:</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="content">Isi Laporan:</label>
            <textarea class="form-control" name="content" id="content" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="date">Tanggal Kejadian:</label>
            <input type="date" class="form-control" name="date" id="date" required>
        </div>

        <div class="form-group">
            <label for="location">Lokasi Kejadian:</label>
            <input type="text" class="form-control" name="location" id="location" required>
        </div>

        <div class="form-group">
            <label for="institution">Instansi Terkait:</label>
            <input type="text" class="form-control" name="institution" id="institution" required>
        </div>

        <div class="form-group">
            <label for="category">Kategori Laporan:</label>
            <input type="text" class="form-control" name="category" id="category" required>
        </div>

        <div class="form-group">
            <label for="file">Lampiran (Opsional):</label>
            <input type="file" class="form-control" name="file" id="file">
        </div>

        <div class="form-group">
            <label for="privacy">Privasi Laporan:</label>
            <select class="form-control" name="privacy" id="privacy" required>
                <option value="public">Publik</option>
                <option value="private">Pribadi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Laporan</button>
    </form>
</div>
@endsection

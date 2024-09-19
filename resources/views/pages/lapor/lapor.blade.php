@extends('layouts.app')

@section('content')
<section id="form-section" class="form-section section">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Daftar Laporan</h2>
            <p class="text-muted">Berikut adalah daftar laporan yang sudah Anda buat. Anda dapat melihat detail, mengedit, atau menghapus laporan.</p>
        </div>

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Tabel laporan -->
        <div class="table-responsive shadow rounded">
            <table class="table table-hover table-bordered align-middle">
                <thead class="bg-primary text-white text-center">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($laporan as $index => $lapor)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $lapor->title }}</td>
                        <td>{{ $lapor->classification }}</td>
                        <td>{{ $lapor->date }}</td>
                        <td>{{ $lapor->location }}</td>
                        <td>{{ $lapor->institution }}</td>
                        <td>{{ $lapor->category }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($lapor->content, 50) }}</td>
                        <td>
                            <span class="badge {{ $lapor->privacy == 'public' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($lapor->privacy) }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <!-- Tombol untuk melihat detail laporan -->
                                <a href="{{ route('lapor.show', $lapor->id) }}" class="btn btn-sm btn-outline-info me-2">
                                    <i class="fas fa-eye"></i> Detail
                                </a>

                                <!-- Tombol untuk edit laporan -->
                                <a href="{{ route('lapor.edit', $lapor->id) }}" class="btn btn-sm btn-outline-warning me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <!-- Form untuk hapus laporan -->
                                <form action="{{ route('lapor.destroy', $lapor->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol untuk tambah laporan -->
        <div class="text-center mt-4">
            <a href="{{ route('lapor.create') }}" class="btn btn-lg btn-primary rounded-pill shadow">
                <i class="fas fa-plus"></i> Buat Laporan Baru
            </a>
        </div>
    </div>
</section>

<style>
    /* Tambahan CSS untuk styling lebih modern */
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
        transition: background-color 0.3s ease;
    }

    .table thead th {
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .btn-outline-info, .btn-outline-warning, .btn-outline-danger {
        border-width: 2px;
    }

    .btn-outline-info:hover, .btn-outline-warning:hover, .btn-outline-danger:hover {
        color: white;
    }

    .btn-outline-info:hover {
        background-color: #0d6efd;
    }

    .btn-outline-warning:hover {
        background-color: #ffc107;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
    }
</style>
@endsection

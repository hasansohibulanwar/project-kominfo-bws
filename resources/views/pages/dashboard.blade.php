@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-primary">Dashboard</h3>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i> Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-cog"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white bg-primary d-flex justify-content-between align-items-center">
                        <span>Jumlah Pegawai</span>
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['jumlah_pegawai'] }}</h5>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-outline-primary mt-3">Info Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white bg-success d-flex justify-content-between align-items-center">
                        <span>Total Keseluruhan</span>
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['jumlah_orang'] }}</h5>
                        <a href="#" class="btn btn-outline-success mt-3">Info Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white bg-warning d-flex justify-content-between align-items-center">
                        <span>Jumlah Kota</span>
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $data['jumlah_kota'] }}</h5>
                        <a href="#" class="btn btn-outline-warning mt-3">Info Lanjut</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <span>Statistik Data Kota</span>
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div class="card-body">
                        <div id="statistikKotaChart" style="width:100%; max-width:100%; height:400px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawKotaChart);

        function drawKotaChart() {
            const data = google.visualization.arrayToDataTable([
                ['Kota', 'Jumlah'],
                @foreach($data['statistik_kota'] as $alamat => $jumlah)
                    ['{{ $alamat }}', {{ $jumlah }}],
                @endforeach
            ]);

            const options = {
                title: 'Statistik Data Kota',
                is3D: true,
                colors: ['#E72929', '#242B1D', '#EEFF04']
            };

            const chart = new google.visualization.PieChart(document.getElementById('statistikKotaChart'));
            chart.draw(data, options);
        }
    </script>
@endpush

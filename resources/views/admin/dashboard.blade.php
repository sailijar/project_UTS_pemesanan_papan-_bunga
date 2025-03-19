@extends('layout.layout')

@section('title','dashboard')
@section('content')



    <h2>Dashboard</h2>
    <hr>
    <!-- Kartu Statistik -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fas fa-box"></i> Total Barang</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>300</strong> Barang</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fas fa-shopping-cart"></i> Total Pesanan</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>50</strong> Pesanan</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fas fa-money-bill"></i> Total Transaksi</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>300</strong> Transaksi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik atau Informasi Tambahan -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><i class="fas fa-chart-line"></i> Grafik Penjualan</h5>
                </div>
                <div class="card-body">
                    <p>Grafik penjualan bulanan akan ditampilkan di sini.</p>
                    <!-- Tempatkan grafik (contoh: Chart.js) -->
                    <!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Canvas untuk Grafik -->
<canvas id="salesChart" width="400" height="200"></canvas>

<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Penjualan',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(0, 123, 255, 0.2)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
                </div>
            </div>
        </div>
    </div>
@endsection

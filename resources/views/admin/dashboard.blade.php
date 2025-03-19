@extends('layout.layout')

@section('content')
    <h2>Dashboard</h2>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Total Barang</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>300</strong> Barang</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Total Pesanan</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>50</strong> Pesanan</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Total Transaksi</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>300</strong> Transaksi</p>
                </div>
            </div>
        </div>
    </div>
@endsection

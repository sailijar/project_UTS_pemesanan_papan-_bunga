@extends('layout.layout')

@section('title','Transaksi')

@section('content')

    <h2>Transaksi Penjualan</h2>
    <hr>

    <!-- Tabel Transaksi -->
    <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Barang</th>
                    <th>Nomor Order</th>
                    <th>Harga</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>2021-05-24</td>
                        <td>Barang {{ $i }}</td>
                        <td>222/{{ $i }}</td>
                        <td>Rp 300.000</td>
                        <td>Foto Bukti Pembayaran</td>
                        <td>
                            @if ($i % 3 == 0)
                                <span class="badge bg-success">Success</span>
                            @elseif ($i % 3 == 1)
                                <span class="badge bg-warning">Pending</span>
                            @else
                                <span class="badge bg-danger">Denied</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
@endsection

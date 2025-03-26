@extends('layout.layout')

@section('title','Pesanan')
@section('content')
    <h2>Data Pesanan</h2>
    <hr>

     <!-- Fitur Pencarian -->
     <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('dashboard') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Pesanan -->
    <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Nomor Order</th>
                    <th>Tgl Pesan</th>
                    <th>Tgl Antar </th>
                    <th>Keterangan</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 5; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>Barang {{ $i }}</td>
                        <td>F0{{ $i }}</td>
                        <td>2021-05-24</td>
                        <td>2021-05-24</td>
                        <td>Ucapan selamat kepada sailijar</td>
                        <td>Besar</td>
                        <td>Rp 300.000</td>
                        <td>{{ $i }}</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                @endfor

                @for ($a = 1; $a <= 5; $a++)
                    <tr>
                        <td>{{ $i + $a }}</td>
                        <td>Barang {{ $a }}</td>
                        <td>F0{{ $a }}</td>
                        <td>2021-05-24</td>
                        <td>2021-05-24</td>
                        <td>Ucapan Duka Cita</td>
                        <td>Kecil</td>
                        <td>Rp 300.000</td>
                        <td>{{ $a }}</td>
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

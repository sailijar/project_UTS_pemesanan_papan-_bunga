@extends('layout.layout')

@section('title','Barang')

@section('content')
    <h2>Data Barang</h2>
    <span class="float-end"><a class="btn btn-primary" href="">
        <i class="fa-solid fa-square-plus"></i> Tambah Data</a></span>
    {{-- <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Tambah Data</button>
      </div> --}}
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>


        </tbody>
      </table>

        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
    </table>
@endsection

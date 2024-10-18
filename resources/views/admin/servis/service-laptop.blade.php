@extends('layouts.mainAdmin')

@section('content')
<div class="content-container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center">
            <h2 class="display-7 fw-bold">Daftar Service Notebook / Laptop</h2>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table custom-table rounded-table table-hover">
            <thead class="custom-header">
                <tr>
                    <th>ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Merek Notebook / Laptop</th>
                    <th>Masalah</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Smith</td>
                    <td>Asus</td>
                    <td>Layar notebook tidak dapat menampilkan gambar</td>
                    <td>2023-06-22</td>
                    <td><span class="badge bg-warning">Dalam Proses</span></td>
                    <td>
                        <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>
@endsection
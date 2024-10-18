@extends('layouts.mainAdmin')

@section('content')
<div class="content-container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center">
            <h2 class="display-7 fw-bold">Daftar Perakitan dan Instalasi Komputer</h2>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table custom-table rounded-table table-hover">
            <thead class="custom-header">
                <tr>
                    <th>ID</th>
                    <th>Nama Klien</th>
                    <th>Tipe Komputer</th>
                    <th>Konfigurasi</th>
                    <th>Tanggal Perakitan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PT. XYZ</td>
                    <td>Server</td>
                    <td>Intel Core i7, 16GB RAM, 1TB HDD</td>
                    <td>2023-06-25</td>
                    <td><span class="badge bg-success">Selesai</span></td>
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

@extends('layouts.mainAdmin')

@section('content')
<div class="content-container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center">
            <h2 class="display-7 fw-bold">Daftar Service Komputer</h2>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table custom-table rounded-table table-hover">
            <thead class="custom-header">
                <tr>
                    <th>ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Tipe Komputer</th>
                    <th>Masalah</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servisList as $servis)
                <tr>
                    <td>{{ $servis->id }}</td>
                    <td>{{ $servis->nama }}</td>
                    <td>{{ $servis->jenis_servis }}</td>
                    <td>{{ $servis->masalah }}</td>
                    <td>{{ $servis->tanggal_masuk }}</td>
                    <td>
                        @if($servis->status == 'selesai')
                            <span class="badge bg-success">Selesai</span>
                        @else
                            <span class="badge bg-warning">Proses</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.servis.show', $servis->formulir_id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.servis.edit', $servis->formulir_id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

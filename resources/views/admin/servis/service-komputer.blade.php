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
                    <th>No</th>
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
                <td>{{ $loop->iteration }}</td> 

                    <td>{{ $servis->nama }}</td>
                    <td>{{ $servis->jenis_servis }}</td>
                    <td>{{ $servis->masalah }}</td>
                    <td>{{ $servis->tanggal_masuk }}</td>
                    <td>{{ $servis->status }}</td>
                    <!-- <td>
                        @if($servis->status == 'selesai')
                            <span class="badge bg-success">Selesai</span>
                        @else
                            <span class="badge bg-warning">{{ ucfirst($servis->status) }}</span>
                        @endif
                    </td> -->
                   <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.servis.show', $servis->formulir_id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <button class="btn btn-sm btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-edit"></i>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach (['pesanan diterima', 'proses pemeriksaan', 'proses perbaikan', 'selesai'] as $status)
                                    <li>
                                    <form action="{{ route('admin.servis.updateStatus', $servis->formulir_id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="{{ $status }}">
                        <button type="submit" class="dropdown-item">{{ ucfirst($status) }}</button>
                    </form>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

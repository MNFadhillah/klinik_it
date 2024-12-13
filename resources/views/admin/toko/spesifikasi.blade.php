@extends('layouts.mainAdmin')

@section('content')
    <div class="container">
        <h2>Spesifikasi Produk</h2>
        <form action="{{ route('admin.toko.spesifikasi.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="produkSelect" class="form-label">Pilih Produk</label>
                <select class="form-control" id="produkSelect" name="produk_id" required>
                    <option value="" selected disabled>Pilih Produk</option>
                    @foreach ($produkList as $produk)
                        <option value="{{ $produk->produk_id }}">{{ $produk->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="isispesifikasi" class="form-label">Tambahkan Spesifikasi Produk</label>
                <textarea class="form-control" id="isispesifikasi" name="isi_spesifikasi" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

        {{-- <h4>Daftar Spesifikasi</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Isi Spesifikasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produkList as $item)
                    <tr>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->isi_spesifikasi }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                data-id="{{ $item->id }}" data-produk="{{ $item->produk_id }}"
                                data-spesifikasi="{{ $item->isi_spesifikasi }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada spesifikasi tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Spesifikasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editProdukSelect" class="form-label">Pilih Produk</label>
                            <select class="form-control" id="editProdukSelect" name="produk_id" required>
                                @foreach ($produkList as $produk)
                                    <option value="{{ $produk->produk_id }}">{{ $produk->nama_produk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="editIsiSpesifikasi" class="form-label">Isi Spesifikasi</label>
                            <textarea class="form-control" id="editIsiSpesifikasi" name="isi_spesifikasi" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const editModal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');
    
        editModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');
            const produkId = button.getAttribute('data-produk');
            const spesifikasi = button.getAttribute('data-spesifikasi');
    
            // Set form action dynamically
            editForm.action = `/admin/toko/spesifikasi/update/${id}`;
    
            // Populate modal fields
            document.getElementById('editProdukSelect').value = produkId;
            document.getElementById('editIsiSpesifikasi').value = spesifikasi;
        });
    </script>
    
@endsection

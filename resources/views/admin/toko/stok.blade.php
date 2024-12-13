@extends('layouts.mainAdmin')
@if(session('success'))
    <div class="alert-container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="alert-container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="alert-container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@section('content')
<div class="content-container">
    <h2 class="text-center mb-4">Daftar Stok Produk</h2>

    <!-- Tombol untuk toggle form tambah produk -->
    <button class="btn btn-primary mb-3" id="toggleFormBtn" onclick="toggleAddForm()">Tambah Produk</button>

    <!-- Table Stok Produk -->
    <div class="table-responsive text-center">
        <table class="table custom-table rounded-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                <tr>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kategori ? $item->kategori->nama_kategori : 'Tidak ada kategori' }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                
                        <!-- Tombol Edit -->
                        <button type="button" class="btn btn-sm btn-warning" onclick="editProduct({{ $item->produk_id }}, '{{ $item->nama_produk }}', {{ $item->harga }}, {{ $item->stok }}, '{{ $item->deskripsi }}', {{ $item->kategori_id }})">Edit</button>
                
                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.toko.delete', $item->produk_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form Tambah/Edit Produk -->
    
        {{-- <!-- Tombol untuk toggle form tambah produk -->
        <button class="btn btn-primary mb-3" id="toggleAddFormBtn" onclick="toggleAddForm()">Tambah Produk</button> --}}
    
        <!-- Form Tambah Produk -->
        <div id="formTambahProduk" class="mt-4" style="display: none;">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title mb-0" id="formTitle">Tambahkan Produk</h5>
                </div>
                <div class="card-body">
                    <form id="productForm" action="{{ route('admin.toko.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST') <!-- Ini akan diubah menjadi PUT saat edit -->
                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
    
                        <!-- Harga Produk -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
    
                        <!-- Stok Produk -->
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required>
                        </div>
    
                        <!-- Deskripsi Produk -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
    
                        <!-- Kategori Produk -->
                        <div class="mb-3">
                            <label for="kategori_id" class="form-label">Kategori</label>
                            <select class="form-select" id="kategori_id" name="kategori_id" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Input Gambar -->
                        <div class="mb-3">
                            <label for="gambar">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
    
                        <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    
        <!-- Form Edit Produk -->
        <div id="formEditProduk" class="mt-4" style="display: none;">
            <div class="card">
                <div class="card-header text-center">
                    <h5 class="card-title mb-0" id="editFormTitle">Edit Produk</h5>
                </div>
                <div class="card-body">
                    <form id="editProductForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Metode PUT untuk update -->
                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="edit_nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="edit_nama_produk" name="nama_produk" required>
                        </div>
    
                        <!-- Harga Produk -->
                        <div class="mb-3">
                            <label for="edit_harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="edit_harga" name="harga" required>
                        </div>
    
                        <!-- Stok Produk -->
                        <div class="mb-3">
                            <label for="edit_stok" class="form-label">Stok</label>
                            <input type="number" class ="form-control" id="edit_stok" name="stok" required>
                        </div>
    
                        <!-- Deskripsi Produk -->
                        <div class="mb-3">
                            <label for="edit_deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
    
                        <!-- Kategori Produk -->
                        <div class="mb-3">
                            <label for="edit_kategori_id" class="form-label">Kategori</label>
                            <select class="form-select" id="edit_kategori_id" name="kategori_id" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <!-- Input Gambar -->
                        <div class="mb-3">
                            <label for="edit_gambar">Gambar Produk</label>
                            <input type="file" class="form-control" id="edit_gambar" name="gambar">
                        </div>
    
                        <button type="submit" class="btn btn-primary" id="editSubmitBtn">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Script untuk Toggle Form -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('.alert-container .alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.classList.remove('show');
                alert.classList.add('fade');
                const container = alert.closest('.alert-container');
                setTimeout(() => {
                    container.remove();
                }, 150);
            }, 5000);
        });
    });

    function toggleAddForm() {
        const addForm = document.getElementById("formTambahProduk");
        const editForm = document.getElementById("formEditProduk");
        if (addForm.style.display === "none") {
            addForm.style.display = "block";
            editForm.style.display = "none";
        } else {
            addForm.style.display = "none";
        }
    }

    function editProduct(id, nama_produk, harga, stok, deskripsi, kategori_id) {
        const editForm = document.getElementById("formEditProduk");
        const addForm = document.getElementById("formTambahProduk");
        addForm.style.display = "none";
        editForm.style.display = "block";

        // Isi kolom input dengan data produk
        document.getElementById("edit_nama_produk").value = nama_produk;
        document.getElementById("edit_harga").value = harga;
        document.getElementById("edit_stok").value = stok;
        document.getElementById("edit_deskripsi").value = deskripsi;
        document.getElementById("edit_kategori_id").value = kategori_id;

        // Ubah action form edit
        const formAction = `{{ url('admin/toko/update') }}/${id}`; // Sesuaikan dengan route update
        document.getElementById("editProductForm").action = formAction;
    }
    @if($errors->any())
        document.getElementById("formTitle").innerText = "Edit Produk"; // Pastikan judul tetap "Edit Produk"
        toggleForm(); // Panggil toggleForm agar form terlihat
    @endif



    // Menutup alert secara otomatis setelah 5 detik
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);

    // Panggil toggleForm() jika ada error
    @if($errors->any())
        toggleForm();
    @endif
</script>
@endsection

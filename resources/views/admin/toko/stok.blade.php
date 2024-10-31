@extends('layouts.mainAdmin')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('content')
<div class="content-container">
    <h2 class="text-center mb-4">Daftar Stok Produk</h2>

    <!-- Tombol untuk toggle form tambah produk -->
    <button class="btn btn-primary mb-3" id="toggleFormBtn" onclick="toggleForm()">Tambah Produk</button>

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
                        <button class="btn btn-sm btn-warning" onclick="editProduct({{ $item->id }})">Edit</button>
                        {{-- <form action="{{ route('admin.toko.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                        </form> --}}
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>    
        </table>
    </div>

    <!-- Form Tambah/Edit Produk -->
    <div id="formProduk" class="mt-4" style="display: none;">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title mb-0" id="formTitle">Tambahkan Produk</h5>
            </div>
            <div class="card-body">
                <form id="productForm" action="{{ route('admin.toko.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
</div>

<!-- Script untuk Toggle Form -->
<script>
    function toggleForm() {
        var form = document.getElementById("formProduk");
        if (form.style.display === "none") {
            form.style.display = "block";
            document.getElementById("formTitle").innerText = "Tambahkan Produk";
            document.getElementById("productForm").action = "{{ route('admin.toko.store') }}";
            document.getElementById("submitBtn").innerText = "Simpan";
        } else {
            form.style.display = "none";
        }
    }

    function editProduct(id) {
        var form = document.getElementById("formProduk");
        form.style.display = "block";
        document.getElementById("formTitle").innerText = "Edit Produk";
        document.getElementById("productForm").action = "/admin/toko/update/" + id;
        document.getElementById("submitBtn").innerText = "Update";
    }

        // Menutup alert secara otomatis setelah 5 detik
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);

    function toggleForm() {
        var form = document.getElementById("formProduk");
        if (form.style.display === "none") {
            form.style.display = "block";
            document.getElementById("formTitle").innerText = "Tambahkan Produk";
            document.getElementById("productForm").action = "{{ route('admin.toko.store') }}";
            document.getElementById("submitBtn").innerText = "Simpan";
        } else {
            form.style.display = "none";
        }
    }

    // Panggil toggleForm() jika ada error
    @if($errors->any())
        toggleForm();
    @endif
</script>
@endsection

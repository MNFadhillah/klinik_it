@extends('layouts.mainAdmin')

@section('content')
<div class="content-container">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-center fw-bold mb-4">Daftar Stok</h2>                
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button class="btn btn-success" id="tambahStok" onclick="toggleForm()">
                        <i class="fas fa-plus"></i> Tambah Stok
                    </button>
                    <div class="input-group" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="table-responsive text-center">
                    <table class="table custom-table rounded-table">
                        <thead>
                            <tr>
                                <th>ID Item</th>
                                <th>Nama Item</th>
                                <th>Jumlah Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Laptop</td>
                                <td>10</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Form Tambah Stok -->
                <div id="formTambahStok" class="mt-4" style="display: none;">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title mb-0">Tambahkan Produk</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stock" name="stock">
                                </div>
                                <div class="mb-3">
                                    <label for="product-image" class="form-label">Foto Produk</label>
                                    <input type="file" class="form-control" id="product-image" name="product-image" accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleForm() {
        var form = document.getElementById("formTambahStok");
        if (form.style.display === "none") {
            form.style.display = "block";
        } else {
             form.style.display = "none";
        }
    }
    </script>
@endsection
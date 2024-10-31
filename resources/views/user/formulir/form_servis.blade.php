<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Servis</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
        }

        .back-button {
            position: absolute;
            top: 1px;
            left: 20px;
            background-color: #A1BECA;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            color: white;
        }

        .back-button img {
            width: 20px;
            height: 20px;
        }

        .back-button:hover {
            background-color: #CDC1FF;
        }

        .form-box {
            background-color: #A1BECA;
            border-radius: 20px;
            padding: 30px;
            width: 350px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffff;
            font-size: 24px;
        }

        .logo {
            text-align: center;
            margin-bottom: 15px;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .logo-line {
            border-bottom: 1px solid white;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #4F378B;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 15px;
            outline: none;
            background-color: #523b8a;
            color: white;
            font-size: 14px;
        }

        button {
            background-color: #26145a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            align-self: center;
        }

        button:hover {
            background-color: #1b0f47;
        }

        .alert {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <button class="back-button" onclick="window.history.back();">
            <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
        </button>

        <div class="form-box">
            <div class="logo">
                <img src="../assets/img/logo.png" alt="Klinik IT Logo" />
            </div>
            <h2>Formulir Servis</h2>
            <div class="logo-line"></div>

            @if(session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('formulir.submitFormServis') }}" method="POST">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>

                <label for="no_hp">No. Hp</label>
                <input type="tel" id="no_hp" name="no_hp" required>

                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="jenis_servis">Jenis Servis</label>
                <select id="jenis_servis" name="jenis_servis" required>
                    <option value="">Pilih Jenis Servis</option>
                    <option value="komputer">Servis Komputer</option>
                    <option value="laptop">Servis Laptop</option>
                </select>

                <label for="masalah">Masalah / Error</label>
                <input type="text" id="masalah" name="masalah" required>

                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" name="tanggal_masuk" required>

                <button type="submit">Submit</button>
            </form>

    @if (Auth::check())
        <div class="container">
            <!-- Tombol kembali dengan ikon di pojok kiri atas -->
            <button class="back-button" onclick="window.history.back();">
                <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
            </button>

            <div class="form-box">
                <div class="logo">
                    <img src="../assets/img/logo.png" alt="Klinik IT Logo" />
                </div>
                <h2>Formulir Servis</h2>
                <div class="logo-line"></div> <!-- Garis di bawah judul berwarna putih -->
                
                <form>
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name">

                    <label for="phone">No. Hp</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address">

                    <label for="service">Jenis Servis</label>
                    <select id="service" name="service">
                        <option value="komputer">Servis Komputer</option>
                        <option value="laptop">Servis Laptop</option>
                    </select>

                    <label for="problem">Masalah / Error</label>
                    <input type="text" id="problem" name="problem">

                    <label for="date">Tanggal Masuk</label>
                    <input type="date" id="date" name="date">

                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
    @else
        <script>
            window.location.href = "{{ route('login') }}";
        </script>
    @endif
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
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
            position: relative;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
        }

        /* Tombol kembali di kiri atas dengan background bulat */
        .back-button {
            position: fixed; /* Ganti ke fixed agar selalu terlihat di kiri atas */
            top: 20px;
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
            z-index: 10; /* Pastikan tombol di atas elemen lainnya */
        }

        .back-button img {
            width: 20px;
            height: 20px;
            pointer-events: none; /* Agar gambar tidak menghalangi klik */
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
            position: relative;
        }

        .logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffffff;
        }

        /* Input file untuk mengunggah foto */
        .logo input[type="file"] {
            display: none;
        }

        .upload-label {
            position: absolute;
            bottom: 0;
            right: 40%;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: transparent; /* Menghilangkan background putih */
        }

        .upload-label img {
            width: 15px;
            height: 15px;
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

        input,
        select {
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
    </style>
</head>

<body>
    <!-- Tombol kembali di kiri atas -->
    <button class="back-button" onclick="window.history.back();">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button>

    <div class="container">
        <div class="form-box">
            <h2>Edit Profil</h2>
            <div class="logo-line"></div>

            <!-- Bagian unggah foto profil -->
            <div class="logo">
                <img src="https://via.placeholder.com/80" alt="Profile Photo" id="profileImage">
                <label for="file-upload" class="upload-label">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" alt="Upload Icon">
                </label>
                <input type="file" id="file-upload" accept="image/*" onchange="loadFile(event)">
            </div>

            <form>
                <label for="name">Nama</label>
                <input type="text" id="name" name="name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email">

                <label for="phone">No. Hp</label>
                <input type="tel" id="phone" name="phone">

                <label for="address">Alamat</label>
                <input type="text" id="address" name="address">

                <label for="service">Jenis Kelamin</label>
                <select id="service" name="service">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        // Fungsi untuk memuat gambar yang diunggah dan menampilkannya sebagai pratinjau
        var loadFile = function(event) {
            var image = document.getElementById('profileImage');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>

</html>

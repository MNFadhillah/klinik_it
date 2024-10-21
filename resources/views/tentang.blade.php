@extends('layouts.main')

@section('content') 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #e6f2ff; /* Warna latar belakang */
            color: #523b8a; /* Warna teks */
        }

        header {
            background-color: #b3d9ff;
            padding: 8px;
            text-align: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin: 10px 0;
            color: #523b8a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center; /* Center the content */
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .box {
            background-color: #b3d9ff; /* Warna kotak */
            border-radius: 10px;
            padding: 20px;
            width: 100%; /* Full width initially */
            max-width: 900px; /* Max width for the combined box */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            display: flex; /* Use flexbox for inner content */
            justify-content: space-between; /* Space out inner boxes */
            align-items: flex-start; /* Align items at the start */
        }

        .inner-box {
            flex: 1; /* Each box takes equal space */
            margin: 0 10px; /* Margin between inner boxes */
        }

        .vertical-line {
            width: 2px; /* Width of the vertical line */
            background-color: #4E31AA; /* Color of the line */
            height: auto; /* Automatic height */
            min-height: 390px; /* Minimum height for the line */
        }

        h2 {
            margin-bottom: 10px;
            color: #523b8a;
            text-align: center;
        }

        h3 {
            margin-top: 10px; /* Space above h3 */
            margin-bottom: 10px; /* Space below h3 */
            color: #523b8a; /* Color for h3 */
            font-size: 16px; /* Reduced font size for specific headings */
        }

        .small-heading {
            font-size: 16px; /* Font size for smaller headings */
            margin-top: 10px;
            margin-bottom: 10px;
            color: #523b8a; /* Color for smaller headings */
            font-weight: bold;
        }

        p {
            line-height: 1.6;
        }

        ul {
            list-style-type: none; /* Remove default list styling */
            padding: 0;
        }

        li {
            margin-bottom: 5px; /* Space between list items */
        }
    </style>
</head>
<body>


<header>
    <h1>Tentang</h1>
</header>

<div class="container">
    <div class="box">
        <div class="inner-box">
            <h2>Klinik IT</h2>
            <p>Komputer Anda sering mengalami masalah seperti kinerja lambat, virus, atau kerusakan keras? Atau mungkin butuh upgrade untuk meningkatkan performa? Klinik IT hadir untuk memberikan solusi cepat dan efisien untuk semua kebutuhan teknologi Anda.</p>
            
            <h3 class="small-heading">Mengapa memilih Klinik IT?</h3>
            <ul>
                <li>1. Layanan Profesional</li>
                <li>2. Perbaikan Cepat & Handal</li>
                <li>3. Pemeliharaan & Upgrade</li>
                <li>4. Harga Transparan</li>
            </ul>
        </div>

        <div class="vertical-line"></div> <!-- Vertical line added here -->

        <div class="inner-box">
            <h2>Visi dan Misi</h2>
            <h3 class="small-heading">Visi Klinik IT:</h3>
            <p>Menjadi penyedia layanan IT terpercaya dan terdepan yang memberikan solusi teknologi komprehensif, efisien, dan inovatif untuk mendukung produktivitas dan kepuasan pelanggan di era digital.</p>
            
            <h3 class="small-heading">Misi Klinik IT:</h3>
            <ul>
                <li>1. Memberikan Solusi Tepat dan Cepat</li>
                <li>2. Menjamin Kualitas Layanan</li>
                <li>3. Menggedukasi Pengguna</li>
                <li>4. Berinovasi dalam Layanan</li>
            </ul>
        </div>
    </div>
</div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection

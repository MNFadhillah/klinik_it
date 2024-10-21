<html>
<head>
    <title>Daftar Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #cce7f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            width: 900px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            position: relative;
            transition: transform 0.3s ease;
        }
        .register-container:hover {
            transform: scale(1.02);
        }
        .register-container h1 {
            color: #3a0ca3;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .register-container hr {
            border: 0;
            border-top: 1px solid #3a0ca3;
            margin: 20px 0;
        }
        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .input-group i {
            background-color: #3a0ca3;
            color: #d3d3d3;
            padding: 20px;
            border-radius: 5px 0 0 5px;
            font-size: 20px;
        }
        .input-group input {
            border: none;
            padding: 20px;
            border-radius: 0 5px 5px 0;
            outline: none;
            width: 100%;
            background-color: #d3d3d3;
            color: #3a0ca3;
            font-size: 20px;
        }
        .input-group input::placeholder {
            color: #3a0ca3;
        }
        .register-container .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .register-container .options a {
            color: #3a0ca3;
            text-decoration: none;
            font-size: 18px;
        }
        .register-container .options a:hover {
            text-decoration: underline;
        }
        .register-container .register-btn {
            background: linear-gradient(to right, #3a0ca3, #00b4d8);
            color: #ffffff;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px #2a0a73;
            font-size: 18px;
            transition: background 0.3s ease, transform 0.3s ease;
            width: 150px;
            height: 50px;
        }
        .register-container .register-btn:hover {
            background: linear-gradient(to right, #2a0a73, #0096c7);
            transform: translateY(-2px);
        }
        .register-container .social-register {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .register-container .social-register button {
            background-color: #ffffff;
            color: #3a0ca3;
            border: 2px solid #3a0ca3;
            padding: 20px 40px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
            font-size: 20px;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .register-container .social-register button:hover {
            background-color: #3a0ca3;
            color: #ffffff;
        }
        .register-container .separator {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .register-container .separator::before,
        .register-container .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #3a0ca3;
        }
        .register-container .separator:not(:empty)::before {
            margin-right: .25em;
        }
        .register-container .separator:not(:empty)::after {
            margin-left: .25em;
        }
        .left-section, .right-section {
            width: 45%;
            font-family: 'Nunito', sans-serif;
        }
        .right-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .right-section p {
            color: #3a0ca3;
            text-align: center;
            font-size: 18px;
        }
        .right-section .social-register {
            width: 100%;
        }
        .vertical-separator {
            border-left: 1px solid #3a0ca3;
            height: 300px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .horizontal-separator {
            border-top: 1px solid #3a0ca3;
            width: 100%;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="left-section">
            <h1>DAFTAR</h1>
            <hr>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username">
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Password">
            </div>
            <div class="options">
                <button class="register-btn">Daftar</button>
            </div>
        </div>
        <div class="vertical-separator"></div>
        <div class="right-section">
            <div class="options">
                <span>Sudah Punya Akun? <a href="/login">Masuk</a></span>
            </div>
            <div class="horizontal-separator"></div>
            <p>Gunakan Akun Facebook / Google Kamu untuk Daftar:</p>
            <div class="social-register">
                <button>Daftar dengan Facebook</button>
                <button>Daftar dengan Google</button>
            </div>
        </div>
    </div>
</body>
</html>
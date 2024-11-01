<html>
<head>
    <title>Login Page</title>
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
        .login-container {
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
        .login-container:hover {
            transform: scale(1.02);
        }
        .login-container h1 {
            color: #3a0ca3;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .login-container hr {
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
        .login-container .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-container .options a {
            color: #3a0ca3;
            text-decoration: none;
            font-size: 18px;
        }
        .login-container .options a:hover {
            text-decoration: underline;
        }
        .login-container .login-btn {
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
        .login-container .login-btn:hover {
            background: linear-gradient(to right, #2a0a73, #0096c7);
            transform: translateY(-2px);
        }
        .login-container .social-login {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-container .social-login button {
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
        .login-container .social-login button:hover {
            background-color: #3a0ca3;
            color: #ffffff;
        }
        .login-container .separator {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        .login-container .separator::before,
        .login-container .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #3a0ca3;
        }
        .login-container .separator:not(:empty)::before {
            margin-right: .25em;
        }
        .login-container .separator:not(:empty)::after {
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
        .right-section .social-login {
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

        
    </style>
</head>
<body>
    <button class="back-button" onclick="window.location.href='/';">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Back Icon">
    </button>
    <div class="login-container">
        <div class="left-section">
            <h1>MASUK</h1>
            <hr>
            <form method="post" action="<?php echo e(route('login.auth')); ?>">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old ('email')); ?>" placeholder="Email">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>                            
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="Password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>                            
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkRemember" name="checkRemember">
                    <label class="form-check-label" for="checkRemember">Ingat Saya</label>
                </div>
                <div class="options">
                    <button id="loginBtn" class="login-btn">Masuk</button>
                    
                </div>
            </form>
        </div>
        <div class="vertical-separator"></div>
        <div class="right-section">
            <div class="options">
                <span>Tidak Punya Akun? <a href="<?php echo e(route('register.show')); ?>">Daftar</a></span>
            </div>
            <div class="horizontal-separator"></div>
            <p>Gunakan Akun Facebook / Google Kamu untuk Masuk:</p>
            <div class="social-login">
                <button><i class="fab fa-facebook-f"></i> Masuk dengan Facebook</button>
                <button><i class="fab fa-google"></i> Masuk dengan Google</button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('loginBtn').addEventListener('click', function() {
            window.location.href = '/';
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\klinik_it\resources\views/login.blade.php ENDPATH**/ ?>
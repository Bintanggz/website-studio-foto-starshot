<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];

    $query = "SELECT * FROM users WHERE name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($userpass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['name'];
        $_SESSION['useremail'] = $user['email'];
        $_SESSION['userphonenumber'] = $user['number_phone'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['message'] = "Login berhasil. Selamat datang " . $user['name'];

        if ($_SESSION['role'] !== 'admin') {
            header("Location: index.php");
            exit;
        } else {
            header("Location: admin/adminDashboard.php");
            exit;
        }
    } else {
        $error_message = "Username atau Password Salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarShot Studio | Login</title>
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background */
        .bg-decoration {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.1;
            pointer-events: none;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: white;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: -100px;
            right: -100px;
            animation: float 6s ease-in-out infinite;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            bottom: -50px;
            left: 10%;
            animation: float 8s ease-in-out infinite;
        }

        .circle-3 {
            width: 150px;
            height: 150px;
            top: 40%;
            right: 20%;
            animation: float 7s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .login-card {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            background: white;
        }

        .login-left {
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            position: relative;
            overflow: hidden;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 3rem;
        }

        .login-left::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -200px;
            right: -200px;
        }

        .login-left::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -150px;
            left: -150px;
        }

        .login-left-content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: white;
        }

        .login-left-content i {
            font-size: 80px;
            margin-bottom: 2rem;
            color: #FFB84D;
            text-shadow: 0 5px 15px rgba(255, 184, 77, 0.3);
        }

        .login-left-content h3 {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .login-left-content p {
            font-size: 1.1rem;
            opacity: 0.95;
            line-height: 1.6;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }

        .feature-item i {
            font-size: 24px;
            color: #FFB84D;
            text-shadow: none;
        }

        .login-right {
            padding: 3rem;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-section img {
            height: 60px;
            margin-bottom: 1rem;
        }

        .logo-section h4 {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .logo-section p {
            color: #64748b;
            font-size: 1rem;
        }

        .form-label {
            color: #475569;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #5B8DEE;
            box-shadow: 0 0 0 4px rgba(91, 141, 238, 0.1);
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.1rem;
        }

        .input-icon .form-control {
            padding-left: 3rem;
        }

        .btn-login {
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 0.875rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(91, 141, 238, 0.4);
            background: linear-gradient(135deg, #4A7FDD 0%, #3968CC 100%);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #94a3b8;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .divider span {
            padding: 0 1rem;
            font-size: 0.9rem;
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
        }

        .link-text {
            color: #5B8DEE;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .link-text:hover {
            color: #4A7FDD;
            text-decoration: underline;
        }

        .footer-links {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #64748b;
            margin-top: 1.5rem;
        }

        @media (max-width: 768px) {
            .login-left {
                display: none;
            }
            
            .login-right {
                padding: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Background Decoration -->
    <div class="bg-decoration">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
        <div class="bg-circle circle-3"></div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="login-card">
                    <div class="row g-0">
                        <!-- Left Side -->
                        <div class="col-md-5 login-left">
                            <div class="login-left-content">
                                <i class="bi bi-camera-fill"></i>
                                <h3>Welcome Back!</h3>
                                <p class="mb-4">Login untuk mengakses studio foto profesional terbaik</p>
                                
                                <div class="mt-4">
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <div class="text-start">
                                            <strong>Booking Mudah</strong>
                                            <br><small>Reservasi kapan saja</small>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <div class="text-start">
                                            <strong>Fotografer Pro</strong>
                                            <br><small>Tim berpengalaman</small>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <div class="text-start">
                                            <strong>Hasil Berkualitas</strong>
                                            <br><small>Foto profesional</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-md-7 login-right">
                            <!-- Logo Section -->
                            <div class="logo-section">
                                <img src="assets/Starshotlogo.png" alt="StarShot Studio Logo">
                                <h4>StarShot Studio</h4>
                                <p>Masuk ke akun Anda</p>
                            </div>

                            <!-- Error Message -->
                            <?php if (!empty($error_message)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <i class="bi bi-exclamation-circle me-2"></i>
                                    <?= $error_message ?>
                                </div>
                            <?php endif; ?>

                            <!-- Login Form -->
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="username" class="form-label">
                                        <i class="bi bi-person-fill me-2"></i>Username
                                    </label>
                                    <div class="input-icon">
                                        <i class="bi bi-person"></i>
                                        <input type="text" class="form-control" id="username" name="username" 
                                               placeholder="Masukkan username" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="userpass" class="form-label">
                                        <i class="bi bi-lock-fill me-2"></i>Password
                                    </label>
                                    <div class="input-icon">
                                        <i class="bi bi-lock"></i>
                                        <input type="password" class="form-control" id="userpass" name="userpass" 
                                               placeholder="Masukkan password" required>
                                    </div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe" style="color: #64748b; font-size: 0.9rem;">
                                        Ingat saya
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-login">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>Login
                                </button>
                            </form>

                            <div class="divider">
                                <span>atau</span>
                            </div>

                            <!-- Footer Links -->
                            <div class="footer-links">
                                <span>
                                    Belum punya akun? 
                                    <a href="register.php" class="link-text">Daftar</a>
                                </span>
                                <span>
                                    <a href="forgotPassword.php" class="link-text">Lupa Password?</a>
                                </span>
                            </div>

                            <!-- Back to Home -->
                            <div class="text-center mt-4">
                                <a href="index.php" class="link-text" style="font-size: 0.9rem;">
                                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="text-center mt-4 text-white">
                    <p class="mb-2" style="font-size: 0.9rem; opacity: 0.9;">
                        <i class="bi bi-shield-check me-2"></i>
                        Data Anda aman dan terenkripsi
                    </p>
                    <p style="font-size: 0.85rem; opacity: 0.8;">
                        © 2025 StarShot Studio. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
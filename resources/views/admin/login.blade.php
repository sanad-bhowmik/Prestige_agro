<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/PADLogo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Prestige Agro Dragon Ltd.</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9ff;
            --dark-color: #2b2d42;
            --danger-color: #f94144;
            --success-color: #4cc9f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .bd {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .bd::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            /* Background image and gradients */
            background-image:
                url('https://images.unsplash.com/photo-1594235045856-a6315f0c4083?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG9mZmljZSUyMGRlY29yfGVufDB8fDB8fHww'),
                /* Your image here */
                radial-gradient(circle at 10% 20%, rgba(67, 97, 238, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(72, 149, 239, 0.1) 0%, transparent 20%);

            background-size: cover, 200% 200%, 200% 200%;
            background-position: center;
            background-repeat: no-repeat;

            /* Opacity for the background image layer */
            opacity: 0.3;

            z-index: 0;
        }

        .bd>* {
            position: relative;
            z-index: 1;
        }


        @keyframes gradientAnimation {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .login-container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 450px;
            padding: 40px;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
            transition: all 0.3s ease;
        }

        .login-container:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
            color: var(--dark-color);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #6c757d;
            font-size: 14px;
        }

        .login-logo {
            width: 80px;
            height: 80px;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            font-size: 32px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark-color);
            font-weight: 500;
            font-size: 14px;
        }

        .input-field {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
            background-color: #f8f9fa;
        }

        .input-field:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(72, 149, 239, 0.2);
            outline: none;
            background-color: white;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 40px;
            color: #6c757d;
            font-size: 18px;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(67, 97, 238, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(67, 97, 238, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .forgot-password {
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
        }

        .forgot-password a {
            color: var(--text-light);
            font-size: 13px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password a:hover {
            color: var(--primary-color);
        }

        .alert {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .alert-danger {
            background-color: rgba(249, 65, 68, 0.1);
            color: var(--danger-color);
            border-left: 4px solid var(--danger-color);
        }

        .alert-success {
            background-color: rgba(76, 201, 240, 0.1);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }

        .alert i {
            margin-right: 10px;
            font-size: 18px;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 30px 20px;
            }

            .login-header h1 {
                font-size: 24px;
            }

            .login-logo {
                width: 70px;
                height: 70px;
                font-size: 28px;
            }
        }

        /* Loading animation */
        .btn-loading .btn-text {
            visibility: hidden;
            opacity: 0;
        }

        .btn-loading::after {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid transparent;
            border-top-color: white;
            border-radius: 50%;
            animation: button-loading-spinner 1s ease infinite;
        }

        @keyframes button-loading-spinner {
            from {
                transform: rotate(0turn);
            }

            to {
                transform: rotate(1turn);
            }
        }
    </style>
</head>

<body class="bd">
    <div class="login-container">
        <div class="login-header">
            <div class="login-logo">
                <img src="{{ asset('img/PADLogo.png') }}" alt="">
            </div>
            <h1>Admin Login</h1>
            <p>Access your admin dashboard</p>
        </div>

        @if(session('error'))
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i>
            {{ session('error') }}
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" id="loginForm">

            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <i class="fas fa-envelope input-icon"></i>
                <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" name="password" class="input-field" placeholder="Enter your password" required>
            </div>


            <button type="submit" class="btn-login" id="loginButton">
                <span class="btn-text">Login</span>
            </button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');

            if (loginForm) {
                loginForm.addEventListener('submit', function() {
                    loginButton.classList.add('btn-loading');
                    loginButton.disabled = true;
                });
            }

            // Add animation to input fields on focus
            const inputFields = document.querySelectorAll('.input-field');
            inputFields.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentNode.querySelector('.input-icon').style.color = 'var(--accent-color)';
                    this.style.backgroundColor = 'white';
                });

                input.addEventListener('blur', function() {
                    this.parentNode.querySelector('.input-icon').style.color = '#6c757d';
                    if (!this.value) {
                        this.style.backgroundColor = '#f8f9fa';
                    }
                });
            });
        });
    </script>
</body>

</html>

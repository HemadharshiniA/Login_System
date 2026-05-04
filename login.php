<?php
session_start();

$rememberedUsername = "";

if (isset($_COOKIE['remember_username'])) {
    $rememberedUsername = $_COOKIE['remember_username'];
}

$theme = "light";

if (isset($_COOKIE['user_theme'])) {
    $theme = $_COOKIE['user_theme'];
}

$error = "";

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.light {
            background: #f5f7fa;
            color: #222;
        }

        body.dark {
            background: #111827;
            color: white;
        }

        body.warm {
            background: #fff3e0;
            color: #4e342e;
        }

        .login {
            max-width: 500px;
            margin: 80px auto;
            border-radius: 20px;
        }

        .themes {
            font-size: 13px;
        }
        body.dark .card {
    background-color: #1f2937;
    color: white;
}

body.dark .form-control {
    background-color: #374151;
    color: white;
    border: 1px solid #6b7280;
}

body.dark .form-control::placeholder {
    color: #d1d5db;
}

body.dark .text-muted {
    color: #d1d5db !important;
}

body.warm .card {
    background-color: #fff8e1;
    color: #4e342e;
}

body.warm .form-control {
    background-color: #fffaf0;
    color: #4e342e;
}
    </style>
</head>

<body class="<?php echo $theme; ?>">

<div class="container">
    <div class="card login shadow-lg">
        <div class="card-body p-4">

            <h3 class="text-center mb-2">Login Page</h3>
            <p class="text-center text-muted mb-3">
                Sessions, Cookies & User Themes
            </p>

            <div class="text-center mb-3">
                <span class="badge bg-secondary themes">
                    Current Theme: <?php echo ucfirst($theme); ?>
                </span>
            </div>

            <?php if ($error != "") { ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <form action="auth.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        class="form-control" 
                        placeholder="Enter username"
                        value="<?php echo $rememberedUsername; ?>"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>

            </form>

            <hr>

            <div class="small text-muted">
                <b>User Credentials:</b><br>
                Sangeetha / sangeetha@gmail.com / san@123 → Dark<br>
                Hema / hema@gmail.com / hema@15 → Light<br>
                Priya / priya@gmail.com / priya@378 → Warm<br>

            </div>

        </div>
    </div>
</div>

</body>
</html>

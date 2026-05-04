<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$theme = $_SESSION['theme'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

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

        .dashboard-card {
            max-width: 650px;
            margin: 80px auto;
            border-radius: 18px;
        }
    </style>
</head>

<body class="<?php echo $theme; ?>">

<div class="container">
    <div class="card dashboard-card shadow-lg">
        <div class="card-body p-4">

            <h2 class="text-center mb-3">
                Welcome, <?php echo $username; ?> 
            </h2>

            <p class="text-center text-muted">
                You are successfully logged in using PHP Sessions.
            </p>

            <hr>

            <h5>Session Details</h5>

            <table class="table table-bordered mt-3">
                <tr>
                    <th>User ID</th>
                    <td><?php echo $userId; ?></td>
                </tr>

                <tr>
                    <th>Username</th>
                    <td><?php echo $username; ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td><?php echo $email; ?></td>
                </tr>

                <tr>
                    <th>Theme</th>
                    <td><?php echo ucfirst($theme); ?></td>
                </tr>
            </table>

            <div class="alert alert-info mt-3">
                This dashboard is protected. You can access it only when session exists.
            </div>

            <a href="logout.php" class="btn btn-danger w-100 mt-3">
                Logout
            </a>

        </div>
    </div>
</div>

</body>
</html>
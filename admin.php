<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
            <p>Ini adalah halaman admin.</p>

            <form action="logout.php" method="post">
                <input type="submit" value="Logout" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>
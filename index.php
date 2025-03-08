<?php
session_start();

$error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
unset($_SESSION['error']);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Username tidak valid!";
        header("Location: index.php");
        exit();
    } else {
        $domain = "@" . explode("@", $username)[1];

        // Cek apakah password sama dengan domain email
        if ($password === $domain) {
            $_SESSION['username'] = $username;
            header("Location: terima.php");
            exit();
        } else {
            $_SESSION['error'] = "Password salah! masukkan huruf dimulai dari @";
            header("Location: index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login</h2>
    <form action="index.php" method="post"> <!-- Form action diubah jadi kosong -->
        <label for="username">Email:</label> 
        <input type="email" name="username" required> 
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="login" value="login">
        <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $education = $_POST['education'];
$phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];
    $alamat = $_POST['alamat'];

    
    $_SESSION['cv_data'] = [
        'name' => $name,
        'dob' => $dob,
        'education' => $education,
        'phone' => $phone,
        'gender' => $gender,
        'experience' => $experience,
        'alamat' => $alamat,
        'email' => $_SESSION['email'] 
    ];


    header("location: cv.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Input CV</h2>
    <form action="terima.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="name" required>
        <br>
        <label for="dob">Tempat dan Tanggal Lahir:</label>
        <input type="text" name="dob" required>
        <br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required>
        <br>
        <label for="phone">Nomor Telepon:</label>
        <input type="text" name="phone" required>
        <br>
        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <label for="experience">Pengalaman Kerja:</label>
        <textarea name="experience" required></textarea>
        <br>
        <label for="education">Riwayat Pendidikan:</label>
        <textarea name="education" required></textarea>
        <br>
        <button type="submit">Buat CV</button>
    </form>
</body>
</html>
<?php
session_start();


$cv_data = $_SESSION['cv_data']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div style="display: flex;">
            <div class="left-section">
                <h2>KONTAK</h2>
                <div class="contact-info">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo $cv_data['phone']; ?></span>
                    </div>
                    <div>
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $cv_data['email']; ?></span>
                    </div>
                </div>
                <div class="experience">
                    <h2>PENGALAMAN KERJA</h2>
                    <p><?php echo nl2br($cv_data['experience']); ?></p>
                </div>
            </div>
            <div class="right-section">
                <h2>DATA PRIBADI</h2>
                <div class="personal-info">
                    <p><strong>Nama :</strong> <?php echo $cv_data['name']; ?></p>
                    <p><strong>Tempat Tgl Lahir :</strong> <?php echo $cv_data['dob']; ?></p>
                    <p><strong>Jenis Kelamin :</strong> <?php echo $cv_data['gender']; ?></p>
                    <p><strong>Alamat :</strong> <?php echo $cv_data['alamat']; ?></p>
                </div>
                <h2>PENDIDIKAN</h2>
                <div class="education">
                    <p><?php echo nl2br($cv_data['education']); ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
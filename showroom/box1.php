<?php
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="/asset/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="logo">
        <img src="../asset/MOVAFLEX2.png" alt="MOVAFLEX Image" width="200">
    </div>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="product.php">Product ▼</a>
                <ul class="dropdown">
                    <?php foreach ($tables as $table): ?>
                        <li><a
                                href="product.php?table=<?= htmlspecialchars($table); ?>"><?= ucfirst(htmlspecialchars($table)); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main>
        <div class="box1-container">
            <div class="banner"></div>
            <div class="product-des"></div>
            <div class="box1-gallary"></div>
            <div class="get-in-touch"></div>
            <footer>
                <ul>
                    <h1>Our Product</h1>
                    <li><a href="#">Office Chair</a></li>
                    <li><a href="#">Table</a></li>
                    <li><a href="#">Office/Table</a></li>
                </ul>
                <ul>
                    <h1>Menu Link</h1>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul>
                    <h1>Contact Us</h1>
                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-box"></i> About</a></li>
                </ul>
            </footer>
        </div>
    </main>
</body>

</html>
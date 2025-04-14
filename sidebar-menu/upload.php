<?php
include "config.php";

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image_path = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

    $stmt = $pdo->prepare("INSERT INTO images (image_path) VALUES (?)");
    $stmt->execute([$image_path]);
    $image_id = $pdo->lastInsertId();

    $stmt = $pdo->prepare("INSERT INTO image_data (image_id, name, description) VALUES (?, ?, ?)");
    $stmt->execute([$image_id, $name, $description]);

    echo "<p>Upload successful! <a href='index.php'>Go back</a></p>";
}
?>
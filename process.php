<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM image_data WHERE image_id = ?"); // Change 'image_data' to your table
    $stmt->execute([$id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        echo "<h2>Image Data</h2>";
        echo "<table border='1' style='width:100%;border-collapse:collapse;'>";
        echo "<tr><th>ID</th><th>Name</th><th>Description</th></tr>";
        echo "<tr><td>" . $data['id'] . "</td><td>" . $data['name'] . "</td><td>" . $data['description'] . "</td></tr>";
        echo "</table>";
    } else {
        echo "<p>No data found for this image.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
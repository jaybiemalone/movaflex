<?php
// database.php - Database connection file
$host = 'localhost'; // Change this to your database host
$dbname = 'your_database'; // Change this to your database name
$username = 'your_username'; // Change this to your database username
$password = 'your_password'; // Change this to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

<!-- index.php - Main Page -->
<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Data Display</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Click an image to view its data</h2>
    <div>
        <?php
        // Fetch images from database
        $stmt = $pdo->query("SELECT id, image_path FROM images"); // Change 'images' to your table
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<a href='process.php?id=" . $row['id'] . "' target='_blank'>";
            echo "<img src='" . $row['image_path'] . "' style='width:100px;cursor:pointer;margin:10px;'>";
            echo "</a>";
        }
        ?>
    </div>
</body>
</html>

<!-- process.php - Process image click and display data -->
<?php
include 'database.php';

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

<?php
@include 'config.php'; // Make sure config.php connects to your DB

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $product_brand = trim($_POST['product_brand']);
    $name = trim($_POST['name']);
    $surface_material = trim($_POST['surface_material']);
    $filter = trim($_POST['filter']);

    // Handle file upload
    if (isset($_FILES['product_image_file_path']) && $_FILES['product_image_file_path']['error'] === 0) {
        $file_tmp_path = $_FILES['product_image_file_path']['tmp_name'];
        $file_name = $_FILES['product_image_file_path']['name'];
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Allowed extensions
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (!in_array($file_extension, $allowed_extensions)) {
            die('Invalid file type. Only JPG, JPEG, PNG, GIF, and WEBP are allowed.');
        }

        // Make safe folder name
        $safe_brand = preg_replace('/[^A-Za-z0-9]/', '_', strtolower($product_brand));
        $destination_folder = "htdocs/movaflex/inventory_product/{$safe_brand}_brand/";

        // Create folder if not exist
        if (!is_dir($destination_folder)) {
            mkdir($destination_folder, 0755, true);
        }

        // Unique file name to avoid overwrite
        $new_file_name = uniqid() . '.' . $file_extension;
        $destination_path = $destination_folder . $new_file_name;
        echo "File saved to: " . $destination_path . "<br>";

        if (move_uploaded_file($file_tmp_path, $destination_path)) {
            // Store the relative path (from the web root) in the database
            $relative_path = "{$safe_brand}_brand/" . $new_file_name;

            // Insert into database
            $stmt = $conn->prepare("INSERT INTO inventory (product_brand, name, product_image_path, surface_material, filter) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $product_brand, $name, $relative_path, $surface_material, $filter);

            if ($stmt->execute()) {
                echo "<script>alert('Product added successfully!'); window.location.href='add-product.php';</script>";
            } else {
                echo "Error inserting into database: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
} else {
    echo "Invalid request.";
}

?>

<?php
include 'config.php'; // your database connection

// Fetch all kokuyo brand products
$query = "SELECT * FROM inventory";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css">
  <title>Sidebar with Cards</title>
  <style>
    .navbar {
      width: 100%;
      height: 200px;
    }

    .content-layout {
      display: flex;
      gap: 68px;
    }

    .sidebar {
      width: 460px;
      height: auto;
      background-color: #ffffff;
      color: white;
      padding: 10px;
      border-radius: 8px;
    }

    .card-container {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-content: flex-start;
      gap: 50px;
    }

    .card {
      width: 288.97px;
      height: 369.37px;
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 16px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-weight: bold;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 16px rgba(62, 61, 61, 0.2);
    }

    @media (max-width: 1366px) {
      .content-layout {
        flex-direction: column;
        align-items: center;
      }

      .card-container {
        justify-content: center;
      }
    }

    .sidebar ul {
      padding: 20px;
      border-bottom: 5px solid #ffffff;
      border-radius: 8px;
    }

    .sidebar ul li {
      padding-top: 20px;
      display: flex;
      align-content: center;
      justify-content: flex-start;
    }

    .sidebar ul li input {
      width: 30%;
      box-sizing: border-box;
    }
  </style>
</head>

<body>

  <div class="movaflex-product">
    <div class="logo">
      <img src="asset/MOVAFLEX2.png" alt="MOVAFLEX Image" width="200">
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li>
          <a href="#">Product</a>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
  </div>

  <div class="content-layout">
    <!-- Search and Filter UI -->
    <div class="sidebar">
      <ul>
        <h4>Filter By:</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="sofa"> Sofa</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="table"> Table</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="office chair"> Office Chair</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="chair"> Chair</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="filter" value="cabinet"> Cabinet</li>
      </ul>
      <ul>
        <h4>Brand</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="kokuyo"> Kokuyo</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="lamex"> Lamex</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="bevco"> Bevco</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="brand" value="alpha"> Alpha</li>

      </ul>
      <ul>
        <h4>Surface Material</h4>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="fabric"> Fabric</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="metal"> Metal</li>
        <li><input type="checkbox" class="filter-checkbox" data-type="material" value="metal"> steel</li>
      </ul>
    </div>

    <!-- Cards -->
    <div class="card-container">
      <input type="search" id="searchBox" style="background-color: #ffffff; width: 90%; height: 50px;"
        placeholder="Search:">

      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="card" data-filter="<?php echo htmlspecialchars($row['filter']); ?>"
          data-brand="<?php echo htmlspecialchars($row['product_brand']); ?>"
          data-material="<?php echo htmlspecialchars($row['surface_material']); ?>">
          <div class="product">
            <!-- Ensure that product image path is correct -->
            <img
              src="<?php echo 'inventory_product/' . htmlspecialchars($row['product_brand']) . '_brand/' . basename($row['product_image_path']); ?>"
              alt="Product Image" style="width:150px;height:auto;">
            <h3><?php echo htmlspecialchars($row['name']); ?></h3>
          </div>
        </div>
      <?php endwhile; ?>

    </div>


  </div>

  </div>

</body>
<script>
  const checkboxes = document.querySelectorAll('.filter-checkbox');
  const cards = document.querySelectorAll('.card');
  const searchBox = document.getElementById('searchBox');

  function filterCards() {
    const filterValues = [];
    const brandValues = [];
    const materialValues = [];

    checkboxes.forEach(cb => {
      if (cb.checked) {
        const value = cb.value.toLowerCase();
        const type = cb.getAttribute('data-type');

        if (type === 'filter') {
          filterValues.push(value);
        } else if (type === 'brand') {
          brandValues.push(value);
        } else if (type === 'material') {
          materialValues.push(value);
        }
      }
    });

    const searchText = searchBox.value.toLowerCase();

    cards.forEach(card => {
      const filter = card.getAttribute('data-filter')?.toLowerCase() || '';
      const productBrand = card.getAttribute('data-brand')?.toLowerCase() || '';
      const surfaceMaterial = card.getAttribute('data-material')?.toLowerCase() || '';
      const name = card.querySelector('h3').innerText.toLowerCase();

      const matchFilter = filterValues.length === 0 || filterValues.includes(filter);
      const matchBrand = brandValues.length === 0 || brandValues.includes(productBrand);
      const matchMaterial = materialValues.length === 0 || materialValues.includes(surfaceMaterial);
      const matchSearch = name.includes(searchText);

      if (matchFilter && matchBrand && matchMaterial && matchSearch) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  // Listeners
  checkboxes.forEach(cb => cb.addEventListener('change', filterCards));
  searchBox.addEventListener('input', filterCards);

</script>

</html>
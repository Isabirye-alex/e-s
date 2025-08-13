<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../models/product.php';


$productModel = new Product(
  $pdo,
  '',      
  0.0,     
  0,       
  0,       
  '',     
  '',      
  false, 
  false,   
  false,   
  false,
  0,      
  0.0,     
  0,       
  '',      
  0,       
  0,         
);

$product = $productModel->getAllProducts($pdo);

?>
<div class="container mt-2 px-2">
<div class="row align-items-center mb-4">
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success">Edit</button>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-danger">Delete</button>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-secondary">EXCEL</button>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-success">PDF</button>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">PRINT</button>
  </div>
</div>


  <table id="productTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price ($)</th>
        <th>Category ID</th>
        <th>Stock</th>
        <th>Featured</th>
        <th>Hot Sales</th>
        <th>Summer Sale</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($product)) {
        foreach ($product as $item) {
          echo '<tr>';
          echo '<td><img src="' . htmlspecialchars($item->imageUrl) . '" alt="Product Image" style="max-width: 30px; max-height: 30px; object-fit: contain;"></td>';
          echo '<td>' . htmlspecialchars($item->name) . '</td>';
          echo '<td>' . number_format($item->price, 2) . '</td>';
          echo '<td>' . htmlspecialchars($item->category_id) . '</td>';
          echo '<td>' . htmlspecialchars($item->stock) . '</td>';
          echo '<td>' . ($item->is_featured ? 'Yes' : 'No') . '</td>';
          echo '<td>' . ($item->is_summer_sale ? 'Yes' : 'No') . '</td>';
          echo '<td>' . ($item->is_hot_sale ? 'Yes' : 'No') . '</td>';
          echo '</tr>';
        }
      } else {
        echo '<tr><td colspan="6" class="text-center">No products found.</td></tr>';
      }
      ?>
    </tbody>
  </table>
</div>

<script>
  $(document).ready(function () {
    $('#productTable').DataTable({
      // Optional: Customize options here if needed
      pageLength: 30,
      lengthChange: false, // Hide "Show entries" dropdown
      ordering: true, // Enable column sorting
      language: {
        search: "Search products:",
        paginate: {
          previous: "&laquo;",
          next: "&raquo;"
        }
      }
    });
  });
</script>
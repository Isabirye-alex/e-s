<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../modal/modal.php';

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
<div class="container mt-2 mb-8">
  <div class="row">
    <div class="col-sm-6">
      <h3 class="mb-0">Dashboard</h3>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-end">
        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
        <li class="breadcrumb-item active" aria-current="page"><a href="?page=dashboard.php">Dashboard</a></li>
      </ol>
    </div>
  </div>
  <!--begin::Container-->
  <div class="container-fluid">
    <!-- Small Box (Stat card) -->
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box text-bg-primary">
          <div class="inner">
            <h3>150</h3>
            <p>New Orders</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
            </path>
          </svg>
          <a href="#"></a>
        
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box text-bg-success">
          <div class="inner">
            <h3>53<sup class="fs-5">%</sup></h3>
            <p>Bounce Rate</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
            </path>
          </svg>
          <a href=""></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box text-bg-warning">
          <div class="inner">
            <h3>44</h3>
            <p>User Registrations</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path
              d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
            </path>
          </svg>
          <a href=""></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box text-bg-danger">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
            </path>
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
            </path>
          </svg>
          <a href=""></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
  <!--end::Container-->
  <!--charts-->
  
  <div class="row">
  <div class="col-md-6">
    <!-- Google Chart can stay in a div -->
    <div id="myChart" style="max-width:700px; height:400px" class="mb-4 rounded shadow-lg bg-white"></div>
  </div>
  <div class="col-md-6">
    <!-- Chart.js  -->
    <canvas id="myChart2" style="max-width:700px; height:500px" class="mb-4 rounded shadow-lg bg-white"></canvas>
  </div>
</div>



  <div class="roundex shadow-lg bg-white py-4 px-4">
  <div class="row align-items-center">
    <div class="col-auto">
      <button type="button" class="btn btn-primary open-modal-btn" data-page="/x/views/product_view.php"
        data-size="lg">Add</button>
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
    <div class="col-auto">
      <button type="button" class="btn btn-primary open-modal-btn" data-page="/x/views/category_view.php"
        data-size="lg">Add New Category</button>
    </div>
  </div>


  <table id="productTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price (UGX)</th>
        <th>Stock</th>
        <th>Featured</th>
        <th>Hot Sales</th>
        <th>Summer Sale</th>
        <th>Percentage Discount (%)</th>
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
          echo '<td>' . htmlspecialchars($item->stock) . '</td>';
          echo '<td>' . ($item->is_featured ? 'Yes' : 'No') . '</td>';
          echo '<td>' . ($item->is_summer_sale ? 'Yes' : 'No') . '</td>';
          echo '<td>' . ($item->is_hot_sale ? 'Yes' : 'No') . '</td>';
          echo '<td>' . htmlspecialchars((int) $item->percentage_discount) . '</td>';

          echo '</tr>';
        }
      } else {
        echo '<tr><td colspan="6" class="text-center">No products found.</td></tr>';
      }
      ?>
    </tbody>
  </table>
  </div>
  </div>



<!--Charts Scripts-->
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',54.8],
  ['France',48.6],
  ['Spain',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

var options = {
  title:'World Wide Wine Production',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 45];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>

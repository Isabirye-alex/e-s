<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php require 'public/head.php'; ?>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <!-- Top Navigation -->
      <?php require 'public/topnav.php'; ?>

      <!-- Sidebar -->
      <?php require 'public/sidenav.php'; ?>

      <!-- Main Content -->
      <main class="app-main">
        <?php
          if (isset($_GET['page']) && !empty($_GET['page'])) {
              $pageFile = 'public/views/' . basename($_GET['page']) . '.php';
              if (file_exists($pageFile)) {
                  include $pageFile;
              } else {
                  echo "<div class='p-4'><h4>404 - Page not found</h4></div>";
              }
          } else {
              include 'public/main.php'; // Default dashboard page
          }
        ?>
      </main>

      <!-- Footer -->
       <?php require 'public/copyright.php';?>
      
    </div>
    <?php require 'public/footer.php'; ?>
  </body>
</html>
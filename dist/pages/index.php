<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php require_once __DIR__ . '/../../inc/head.php'; ?>
  <!--end::Head-->

  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php require_once __DIR__ . '/../../inc/header.php'; ?>
      <!--end::Header-->

      <!--begin::Sidebar-->
      <?php require_once __DIR__ . '/../../inc/sidenav.php'; ?>
      <!--end::Sidebar-->

      <!--begin::App Main-->
      <main class="app-main">
        <?php
          if (isset($_GET['page']) && !empty($_GET['page'])) {
              $page = basename($_GET['page']);  // sanitize input
              $pageFile = __DIR__ . '/../../views/' . $page . '.php';
              if (file_exists($pageFile)) {
                  include $pageFile;
              } else {
                  echo "<div class='p-4'><h4>404 - Page not found</h4></div>";
              }
          } else {
              include __DIR__ . '/../../views/dashboard.php'; // default content
          }
        ?>
        
      </main>
      <!--end::App Main-->

      <!--begin::Footer-->
      
    <!--end::App Wrapper-->

    <!--begin::Script-->
    <?php require_once __DIR__ . '/../../inc/footer.php'; ?>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>

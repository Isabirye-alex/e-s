<main class="app-main">
  <!-- App Content Header -->
  <header class="app-content-header py-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-end mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- App Content -->
  <section class="app-content">
    <div class="container-fluid">
      <div class="row g-3">
        <!-- Dashboard Widgets -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-primary">
            <div class="inner">
              <h3>150</h3>
              <p>New Orders</p>
            </div>
            <!-- Icon: Shopping Cart -->
            <svg class="small-box-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M6 6h15l-1.5 9h-13.5l-1.5-9zm0 0l-1-3h-2v2h1l1 3zm3 13a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z"/>
            </svg>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-success">
            <div class="inner">
              <h3>53<sup class="fs-5">%</sup></h3>
              <p>Bounce Rate</p>
            </div>
            <!-- Icon: Chart -->
            <svg class="small-box-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M3 3v18h18v-2h-16v-16h-2zm4 10h2v5h-2v-5zm4-4h2v9h-2v-9zm4-4h2v13h-2v-13z"/>
            </svg>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>User Registrations</p>
            </div>
            <!-- Icon: User -->
            <svg class="small-box-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-danger">
            <div class="inner">
              <h3>65</h3>
              <p>Unique Visitors</p>
            </div>
            <!-- Icon: Eye -->
            <svg class="small-box-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 100 6 3 3 0 000-6z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow-sm p-3 mb-4 bg-body rounded">
      <?php require_once __DIR__ . '/products_page.php'; ?>
    </div>

    <?php require_once __DIR__ . '/../inc/copyright.php'; ?>
  </section>
</main>

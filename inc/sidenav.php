<style>

  .app-sidebar {
  font-size: 1.5rem; /* Increase font size */
  height: 100vh; /* Occupy full screen height */
  overflow-y: auto; /* Scroll if content exceeds screen */
}

.sidebar-menu > .nav-item {
  margin-bottom: 8px; /* Space between dropdown sections */
}

.sidebar-menu .nav-link {
  padding: 12px 16px; /* Bigger clickable area */
}

.sidebar-menu .nav-treeview .nav-link {
  padding-left: 32px; /* Indent submenus */
}

.nav-treeview .nav-item {
  margin-bottom: 6px; /* Space between dropdown items */
}

</style>

<aside class="app-sidebar bg-body-secondary shadow text-primary" data-bs-theme="dark">
  <!-- Sidebar Brand -->
  <div class="sidebar-brand">
    <a href="./index.html" class="brand-link">
      <img src="../assets/img/AdminLTELogo.png" alt="X-Shop Logo" class="brand-image opacity-75 shadow" />
      <span class="brand-text fw-light">X-Dashboard</span>
    </a>
  </div>

  <!-- Sidebar Wrapper -->
  <div class="sidebar-wrapper">
    <nav class="mt-2 text-primary">
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

        <!-- Dashboard -->
        <li class="nav-item menu-open">
          <a href="?page=dashboard" class="nav-link active">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Orders -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-cart3"></i>
            <p>Orders <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="?page=orders" class="nav-link"><i class="nav-icon bi bi-list-check"></i><p>All Orders</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-hourglass-split"></i><p>Pending Orders</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-check2-circle"></i><p>Confirmed Orders</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-truck"></i><p>Shipped Orders</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-gear"></i><p>Processed Orders</p></a></li>
          </ul>
        </li>

        <!-- Reports -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-bar-chart-line"></i>
            <p>Reports <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="?page=reports" class="nav-link"><i class="nav-icon bi bi-receipt"></i><p>View Reports</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-currency-dollar"></i><p>Sales Report</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-wallet2"></i><p>Cash Flow</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-box-seam"></i><p>Stock Report</p></a></li>
          </ul>
        </li>

        <!-- System Users -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
            <p>System Users <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="?page=system_users" class="nav-link"><i class="nav-icon bi bi-person-check-fill"></i><p>Active Users</p></a></li>
            <li class="nav-item"><a href="?page=locked_users" class="nav-link"><i class="nav-icon bi bi-person-dash-fill"></i><p>Blocked Users</p></a></li>
            <li class="nav-item"><a href="?page=user_groups" class="nav-link"><i class="nav-icon bi bi-people"></i><p>User Groups</p></a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-gear-wide-connected"></i>
            <p>Vendors <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-people"></i><p>Active Vendors</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-cash-coin"></i><p>Currencies</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-truck-front-fill"></i><p>Inactive Vendors</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-person-lines-fill"></i><p>Locked Vendors</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-arrow-repeat"></i><p>High Selling Vendors</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-arrow-left-right"></i><p>Poor Performing Vendors</p></a></li>
          </ul>
        </li>

        <!-- System Admin -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-shield-lock-fill"></i>
            <p>System Admin <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="?page=login_attempts" class="nav-link"><i class="nav-icon bi bi-key-fill"></i><p>Login Attempts</p></a></li>
            <li class="nav-item"><a href="?page=system_roles" class="nav-link"><i class="nav-icon bi bi-person-badge-fill"></i><p>System Roles</p></a></li>
          </ul>
        </li>

        <!-- Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-gear-wide-connected"></i>
            <p>Management <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="?page=categories" class="nav-link"><i class="nav-icon bi bi-tags-fill"></i><p>Categories & Units</p></a></li>
            <li class="nav-item"><a href="?page=supplier" class="nav-link"><i class="nav-icon bi bi-truck-front-fill"></i><p>Suppliers List</p></a></li>
            <li class="nav-item"><a href="?page=customers" class="nav-link"><i class="nav-icon bi bi-person-lines-fill"></i><p>Customers List</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-arrow-repeat"></i><p>Price Changes</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-arrow-left-right"></i><p>Stock Changes</p></a></li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>
</aside>

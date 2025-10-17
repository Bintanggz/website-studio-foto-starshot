<?php
session_start();
include '../../connection.php';

// Cek role admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../../login.php");
    exit;
}

// Proses saat form disubmit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $loc = $_POST['location'];
    $desc = $_POST['description'];
    $price = $_POST['price_per_hour'];

    // Cek jika folder uploads belum ada → buat otomatis
    $uploadDir = "../../uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Upload gambar (opsional)
    $imagePath = null;
    if (!empty($_FILES['image']['name'])) {
        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $imagePath = "uploads/" . $fileName;
        }
    }

    // Default status aktif dan tersedia
    $status = "active";
    $is_available = 1;

    // Query simpan data
    $query = "INSERT INTO studio (name, location, description, price_per_hour, image, is_available, status, created_at)
              VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssdsis', $name, $loc, $desc, $price, $imagePath, $is_available, $status);
    mysqli_stmt_execute($stmt);

    header("Location: manageStudios.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Dashboard | Studio Management</title>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      crossorigin="anonymous" />
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      crossorigin="anonymous" />
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="../../adminlte.css" />
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="../../logout.php">
                <i class="bi bi-box-arrow-right"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="../adminDashboard.php" class="brand-link">
            <img src="../../assets/logo.png" alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Admin Dashboard</span>
          </a>
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-header">USER</li>
              <li class="nav-item">
                <a href="../userTables/manageUsers.php" class="nav-link">
                  <i class="bi bi-people-fill"></i>
                  <p>User Management</p>
                </a>
              </li>
              <li class="nav-header">STUDIO</li>
              <li class="nav-item">
                <a href="../studioTables/manageStudios.php" class="nav-link active">
                  <i class="bi bi-houses-fill"></i>
                  <p>Studio Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../studioScheduleTables/manageStudioSchedules.php" class="nav-link">
                  <i class="bi bi-calendar-event-fill"></i>
                  <p>Schedule Management</p>
                </a>
              </li>
              <li class="nav-header">BOOKING</li>
              <li class="nav-item">
                <a href="../bookingTables/manageBookings.php" class="nav-link">
                  <i class="bi bi-book-fill"></i>
                  <p>Booking Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../paymentTables/managePayments.php" class="nav-link">
                  <i class="bi bi-credit-card-fill"></i>
                  <p>Payment Management</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Tambah Studio</h3>
            <a href="manageStudios.php" class="btn btn-secondary">
              <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
          </div>
        </div>

        <div class="app-content">
          <div class="container-fluid">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama Studio</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>

                  <div class="mb-3">
                    <label for="price_per_hour" class="form-label">Harga per Jam</label>
                    <input type="number" class="form-control" name="price_per_hour" id="price_per_hour" required>
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="location" class="form-label">Lokasi</label>
                    <input type="text" name="location" id="location" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label for="image" class="form-label">Upload Gambar</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                  </div>

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-save2"></i> Tambahkan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Admin Dashboard</div>
        <strong>Copyright &copy; 2025</strong> All rights reserved.
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      crossorigin="anonymous"></script>
    <script src="../../adminlte.js"></script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
      const Default = { scrollbarTheme: "os-theme-light", scrollbarAutoHide: "leave", scrollbarClickScroll: true };
      document.addEventListener("DOMContentLoaded", function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined") {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, { scrollbars: Default });
        }
      });
    </script>
  </body>
</html>

<?php
session_start();
include '../../connection.php';

// Pastikan hanya admin yang bisa mengakses
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../../login.php");
    exit;
}

// Ambil data dari tabel studio
$query = "SELECT * FROM studio";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Studio Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../../adminlte.css" />
    <style>
        .studio-img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <!-- Header -->
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
                    <a class="nav-link text-danger" href="../../logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <a href="../adminDashboard.php" class="brand-link">
                <img src="../../assets/logo.png" alt="Logo" class="brand-image opacity-75 shadow" />
                <span class="brand-text fw-light">Admin Dashboard</span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
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

    <!-- Main Content -->
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <h3 class="mb-0">Kelola Studio</h3>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h3 class="card-title mb-0">Daftar Studio</h3>
                        <a href="addStudio.php" class="btn btn-light text-primary ms-auto">
                            Tambah Studio <i class="bi bi-plus-lg me-1"></i>
                        </a>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Harga/Jam</th>
                                    <th>Deskripsi</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Ketersediaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($studio = mysqli_fetch_assoc($result)) {
                                    $statusBadge = $studio['is_available'] ? 'success' : 'secondary';
                                    $statusText = $studio['is_available'] ? 'Tersedia' : 'Tidak Tersedia';
                                    $statusStudio = htmlspecialchars($studio['status']);
                                    $imagePath = !empty($studio['image']) ? "../../uploads/" . htmlspecialchars($studio['image']) : "../../assets/no-image.png";

                                    echo "<tr>";
                                    echo "<td>{$no}</td>";
                                    echo "<td><img src='{$imagePath}' alt='Studio Image' class='studio-img'></td>";
                                    echo "<td>" . htmlspecialchars($studio['name']) . "</td>";
                                    echo "<td>Rp " . number_format($studio['price_per_hour'], 0, ',', '.') . "</td>";
                                    echo "<td>" . htmlspecialchars($studio['description']) . "</td>";
                                    echo "<td>" . htmlspecialchars($studio['location']) . "</td>";
                                    echo "<td>$statusStudio</td>";
                                    echo "<td><span class='badge text-bg-$statusBadge'>$statusText</span></td>";
                                    echo "<td>
                                        <a href='editStudio.php?studio_id={$studio['id']}' class='btn btn-sm btn-warning'><i class='bi bi-pencil'></i></a>
                                        <a href='deleteStudio.php?studio_id={$studio['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Hapus studio ini?\")'><i class='bi bi-trash'></i></a>
                                        <a href='../studioScheduleTables/addStudioSchedule.php?studio_id={$studio['id']}' class='btn btn-sm btn-primary'><i class='bi bi-calendar-event-fill'></i></a>
                                    </td>";
                                    echo "</tr>";
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Admin Dashboard</div>
        <strong>Copyright &copy; 2025 All rights reserved.</strong>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="../../adminlte.js"></script>
</body>
</html>

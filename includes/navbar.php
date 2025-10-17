<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="index.php">
      <img src="assets/Starshotlogo.png" alt="Logo" width="40" height="40" class="me-2">
      StarShot Studio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link <?php echo ($current_page=='index.php')?'active':''; ?>" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current_page=='about.php')?'active':''; ?>" href="about.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current_page=='services.php')?'active':''; ?>" href="services.php">Layanan</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current_page=='gallery.php')?'active':''; ?>" href="gallery.php">Galeri</a></li>
        <li class="nav-item"><a class="nav-link <?php echo ($current_page=='contact.php')?'active':''; ?>" href="contact.php">Kontak</a></li>
        <?php if(!isset($_SESSION['user_id'])): ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <?php else: ?>
          <li class="nav-item dropdown">
            <button class="btn nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle me-2"></i>Akun
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="user/userProfile.php">Profile</a></li>
              <li><a class="dropdown-item" href="booking/bookingForm.php">Booking</a></li>
              <li><a class="dropdown-item" href="user/userHistory.php">History</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

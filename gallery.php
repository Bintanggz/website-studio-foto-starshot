<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

<!-- Hero Section Gallery -->
<section class="position-relative d-flex align-items-center text-white overflow-hidden"
         style="background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%); min-height: 60vh; padding-top: 100px;">
  <!-- Animated Background Elements -->
  <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.1;">
    <div class="position-absolute rounded-circle" 
         style="width: 250px; height: 250px; background: white; top: -80px; right: -80px; animation: float 6s ease-in-out infinite;"></div>
    <div class="position-absolute rounded-circle" 
         style="width: 180px; height: 180px; background: white; bottom: -40px; left: 8%; animation: float 8s ease-in-out infinite;"></div>
  </div>
  
  <div class="container position-relative z-1 text-center" data-aos="fade-up">
    <span class="badge bg-white bg-opacity-25 text-white px-4 py-2 rounded-pill mb-3">
      <i class="bi bi-images me-2"></i>Portfolio
    </span>
    <h1 class="display-3 fw-bold mb-4">
      Galeri <span style="color: #FFB84D;">Karya Kami</span>
    </h1>
    <p class="lead fs-4 mx-auto" style="max-width: 700px;">
      Lihat hasil karya fotografi profesional dari tim StarShot Studio yang telah dipercaya oleh ratusan klien
    </p>
  </div>
</section>

<!-- Filter Categories -->
<section class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge px-4 py-2 rounded-pill mb-3"
            style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
        <i class="bi bi-funnel me-2"></i>Filter Kategori
      </span>
      <h2 class="display-6 fw-bold mb-4" style="color: #1e293b;">
        Jelajahi Berdasarkan <span style="color: #5B8DEE;">Kategori</span>
      </h2>
    </div>

    <!-- Category Buttons -->
    <div class="d-flex flex-wrap gap-3 justify-content-center mb-5" data-aos="zoom-in">
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn active" data-filter="all"
              style="background: #5B8DEE; color: white; border: none; transition: all 0.3s;">
        <i class="bi bi-grid-3x3-gap me-2"></i>Semua
      </button>
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn" data-filter="wedding"
              style="background: #f8f9fa; color: #6c757d; border: none; transition: all 0.3s;">
        <i class="bi bi-heart me-2"></i>Wedding
      </button>
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn" data-filter="portrait"
              style="background: #f8f9fa; color: #6c757d; border: none; transition: all 0.3s;">
        <i class="bi bi-person me-2"></i>Portrait
      </button>
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn" data-filter="product"
              style="background: #f8f9fa; color: #6c757d; border: none; transition: all 0.3s;">
        <i class="bi bi-bag me-2"></i>Product
      </button>
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn" data-filter="family"
              style="background: #f8f9fa; color: #6c757d; border: none; transition: all 0.3s;">
        <i class="bi bi-people me-2"></i>Family
      </button>
      <button class="btn btn-lg rounded-pill px-4 py-2 filter-btn" data-filter="graduation"
              style="background: #f8f9fa; color: #6c757d; border: none; transition: all 0.3s;">
        <i class="bi bi-mortarboard me-2"></i>Graduation
      </button>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4" id="galleryGrid">
      <!-- Wedding Photos -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="wedding" data-aos="fade-up" data-aos-delay="100">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/gallery1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Wedding Photo 1">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(91, 141, 238, 0.9) 0%, rgba(74, 127, 221, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Wedding Ceremony</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-heart-fill me-2" style="color: #5B8DEE;"></i>Wedding
            </span>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 gallery-item" data-category="wedding" data-aos="fade-up" data-aos-delay="200">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/gallery2.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Wedding Photo 2">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(91, 141, 238, 0.9) 0%, rgba(74, 127, 221, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Pre-Wedding</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-heart-fill me-2" style="color: #5B8DEE;"></i>Wedding
            </span>
          </div>
        </div>
      </div>

      <!-- Portrait Photos -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="portrait" data-aos="fade-up" data-aos-delay="300">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/gallery3.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Portrait Photo">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(255, 184, 77, 0.9) 0%, rgba(255, 167, 38, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Professional Portrait</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-person-fill me-2" style="color: #FFB84D;"></i>Portrait
            </span>
          </div>
        </div>
      </div>

      <!-- Product Photos -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="product" data-aos="fade-up" data-aos-delay="100">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Product Photo">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(40, 167, 69, 0.9) 0%, rgba(32, 201, 151, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Product Catalog</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-bag-fill me-2 text-success"></i>Product
            </span>
          </div>
        </div>
      </div>

      <!-- Family Photos -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="family" data-aos="fade-up" data-aos-delay="200">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/2.jpeg" class="w-100 h-100" style="object-fit: cover;" alt="Family Photo">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(232, 62, 140, 0.9) 0%, rgba(214, 51, 132, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Happy Family</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-people-fill me-2" style="color: #e83e8c;"></i>Family
            </span>
          </div>
        </div>
      </div>

      <!-- Graduation Photos -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="graduation" data-aos="fade-up" data-aos-delay="300">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/3.jpeg" class="w-100 h-100" style="object-fit: cover;" alt="Graduation Photo">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(111, 66, 193, 0.9) 0%, rgba(90, 50, 163, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Graduation Day</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-mortarboard-fill me-2" style="color: #6f42c1;"></i>Graduation
            </span>
          </div>
        </div>
      </div>

      <!-- More Wedding -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="wedding" data-aos="fade-up" data-aos-delay="100">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/studio.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Wedding Reception">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(91, 141, 238, 0.9) 0%, rgba(74, 127, 221, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Wedding Reception</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-heart-fill me-2" style="color: #5B8DEE;"></i>Wedding
            </span>
          </div>
        </div>
      </div>

      <!-- More Portrait -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="portrait" data-aos="fade-up" data-aos-delay="200">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/gallery1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Studio Portrait">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(255, 184, 77, 0.9) 0%, rgba(255, 167, 38, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Studio Portrait</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-person-fill me-2" style="color: #FFB84D;"></i>Portrait
            </span>
          </div>
        </div>
      </div>

      <!-- More Product -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="product" data-aos="fade-up" data-aos-delay="300">
        <div class="position-relative overflow-hidden rounded-4 shadow-sm gallery-card"
             style="height: 350px; cursor: pointer; transition: all 0.3s;"
             onmouseover="this.querySelector('.gallery-overlay').style.opacity='1'; this.style.transform='translateY(-10px)'"
             onmouseout="this.querySelector('.gallery-overlay').style.opacity='0'; this.style.transform='translateY(0)'">
          <img src="assets/gallery2.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Product Commercial">
          <div class="gallery-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column align-items-center justify-content-center"
               style="background: linear-gradient(135deg, rgba(40, 167, 69, 0.9) 0%, rgba(32, 201, 151, 0.9) 100%); opacity: 0; transition: all 0.3s;">
            <i class="bi bi-zoom-in text-white mb-3" style="font-size: 50px;"></i>
            <h5 class="text-white fw-bold mb-2">Commercial Product</h5>
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill">
              <i class="bi bi-bag-fill me-2 text-success"></i>Product
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-5" data-aos="fade-up">
      <button class="btn btn-lg rounded-pill px-5 py-3 fw-semibold"
              style="background: #5B8DEE; color: white; border: none; transition: all 0.3s;"
              onmouseover="this.style.background='#4A7FDD'; this.style.transform='scale(1.05)'"
              onmouseout="this.style.background='#5B8DEE'; this.style.transform='scale(1)'">
        <i class="bi bi-arrow-down-circle me-2"></i>Load More
      </button>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-white">
  <div class="container py-5">
    <div class="row g-4 text-center">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="p-4 rounded-4" style="background: rgba(91, 141, 238, 0.05);">
          <i class="bi bi-images" style="font-size: 50px; color: #5B8DEE;"></i>
          <h2 class="display-4 fw-bold mt-3 mb-0" style="color: #5B8DEE;">5000+</h2>
          <p class="text-muted mb-0">Foto Dihasilkan</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-4 rounded-4" style="background: rgba(255, 184, 77, 0.1);">
          <i class="bi bi-people" style="font-size: 50px; color: #FFB84D;"></i>
          <h2 class="display-4 fw-bold mt-3 mb-0" style="color: #FFB84D;">500+</h2>
          <p class="text-muted mb-0">Klien Puas</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="p-4 rounded-4" style="background: rgba(40, 167, 69, 0.05);">
          <i class="bi bi-award" style="font-size: 50px; color: #28a745;"></i>
          <h2 class="display-4 fw-bold mt-3 mb-0 text-success">15+</h2>
          <p class="text-muted mb-0">Penghargaan</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="p-4 rounded-4" style="background: rgba(232, 62, 140, 0.05);">
          <i class="bi bi-star-fill" style="font-size: 50px; color: #e83e8c;"></i>
          <h2 class="display-4 fw-bold mt-3 mb-0" style="color: #e83e8c;">4.9</h2>
          <p class="text-muted mb-0">Rating Google</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);">
  <div class="container py-5 text-center text-white" data-aos="zoom-in">
    <i class="bi bi-camera-fill mb-4" style="font-size: 60px; opacity: 0.9;"></i>
    <h2 class="display-5 fw-bold mb-4">Ingin Tampil di Galeri Kami?</h2>
    <p class="lead mb-5 mx-auto" style="max-width: 600px;">
      Book sekarang dan jadilah bagian dari portofolio karya terbaik StarShot Studio
    </p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="booking/bookingForm.php" class="btn btn-lg rounded-pill px-5 py-3 shadow-lg fw-semibold"
         style="background: #FFB84D; color: #000; border: none; transition: all 0.3s;"
         onmouseover="this.style.transform='scale(1.05)'; this.style.background='#FFA726'"
         onmouseout="this.style.transform='scale(1)'; this.style.background='#FFB84D'">
        <i class="bi bi-calendar-check me-2"></i>Booking Sekarang
      </a>
      <a href="services.php" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold"
         style="transition: all 0.3s;">
        <i class="bi bi-grid-3x3-gap me-2"></i>Lihat Paket
      </a>
    </div>
  </div>
</section>

<!-- JavaScript for Filter -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const filter = this.getAttribute('data-filter');
      
      // Update active button
      filterBtns.forEach(b => {
        b.style.background = '#f8f9fa';
        b.style.color = '#6c757d';
        b.classList.remove('active');
      });
      this.style.background = '#5B8DEE';
      this.style.color = 'white';
      this.classList.add('active');

      // Filter items
      galleryItems.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'block';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'scale(1)';
          }, 10);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'scale(0.8)';
          setTimeout(() => {
            item.style.display = 'none';
          }, 300);
        }
      });
    });
  });
});
</script>

<!-- CSS Animations -->
<style>
@keyframes float {
  0%, 100% {
    transform: translateY(0) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(5deg);
  }
}

.gallery-item {
  transition: all 0.3s ease;
}

.gallery-card:hover {
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2) !important;
}

.filter-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
</style>

<?php include 'includes/footer.php'; ?>
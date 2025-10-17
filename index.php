<?php
include 'includes/head.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero position-relative d-flex align-items-center text-white overflow-hidden"
         style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 90vh;">
  <!-- Animated Background Elements -->
  <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.1;">
    <div class="position-absolute rounded-circle" 
         style="width: 300px; height: 300px; background: white; top: -100px; right: -100px; animation: float 6s ease-in-out infinite;"></div>
    <div class="position-absolute rounded-circle" 
         style="width: 200px; height: 200px; background: white; bottom: -50px; left: 10%; animation: float 8s ease-in-out infinite;"></div>
    <div class="position-absolute rounded-circle" 
         style="width: 150px; height: 150px; background: white; top: 40%; right: 20%; animation: float 7s ease-in-out infinite;"></div>
  </div>
  
  <div class="container position-relative z-1" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <div class="mb-4" data-aos="zoom-in" data-aos-delay="100">
          <span class="badge bg-white bg-opacity-25 text-white px-4 py-2 rounded-pill mb-3">
            📸 Professional Photo Studio
          </span>
        </div>
        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up" data-aos-delay="200">
          Selamat Datang di<br>
          <span class="position-relative d-inline-block">
            <span class="text-warning">StarShot Studio</span>
            <svg class="position-absolute" style="bottom: -10px; left: 0; width: 100%; height: 12px;" viewBox="0 0 300 12">
              <path d="M0,6 Q150,12 300,6" stroke="#ffc107" stroke-width="3" fill="none"/>
            </svg>
          </span>
        </h1>
        <p class="lead fs-4 mb-5 mx-auto" style="max-width: 700px;" data-aos="fade-up" data-aos-delay="300">
          Abadikan momen berharga Anda dengan hasil foto profesional berkualitas tinggi dan konsep kreatif yang memukau.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap" data-aos="fade-up" data-aos-delay="400">
          <a href="booking/bookingForm.php" class="btn btn-warning btn-lg rounded-pill px-5 py-3 shadow-lg fw-semibold"
             style="transition: all 0.3s; transform: translateY(0);"
             onmouseover="this.style.transform='translateY(-5px) scale(1.05)'"
             onmouseout="this.style.transform='translateY(0) scale(1)'">
            <i class="bi bi-calendar-check me-2"></i>Booking Sekarang
          </a>
          <a href="#tentang" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold"
             style="transition: all 0.3s; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">
            <i class="bi bi-play-circle me-2"></i>Pelajari Lebih Lanjut
          </a>
        </div>
        
        <!-- Stats -->
        <div class="row mt-5 pt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="p-3 rounded-4" style="backdrop-filter: blur(10px); background: rgba(255,255,255,0.15);">
              <h3 class="display-6 fw-bold mb-0">1000+</h3>
              <p class="mb-0 text-white-50">Sesi Foto Selesai</p>
            </div>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="p-3 rounded-4" style="backdrop-filter: blur(10px); background: rgba(255,255,255,0.15);">
              <h3 class="display-6 fw-bold mb-0">500+</h3>
              <p class="mb-0 text-white-50">Klien Puas</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 rounded-4" style="backdrop-filter: blur(10px); background: rgba(255,255,255,0.15);">
              <h3 class="display-6 fw-bold mb-0">24/7</h3>
              <p class="mb-0 text-white-50">Layanan Support</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Studio -->
<section id="tentang" class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="position-relative">
          <img src="assets/img2.jpg" class="img-fluid rounded-4 shadow-lg w-100" alt="Studio StarShot"
               style="object-fit: cover; height: 500px;">
          <!-- Floating Badge -->
          <div class="position-absolute top-0 start-0 m-4 bg-warning text-dark px-4 py-3 rounded-pill shadow-lg fw-bold"
               data-aos="zoom-in" data-aos-delay="200">
            <i class="bi bi-star-fill me-2"></i>Rated 5.0
          </div>
          <!-- Play Button Overlay -->
          <div class="position-absolute top-50 start-50 translate-middle">
            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center shadow-lg"
                 style="width: 80px; height: 80px; cursor: pointer; transition: all 0.3s;"
                 onmouseover="this.style.transform='scale(1.1)'"
                 onmouseout="this.style.transform='scale(1)'">
              <i class="bi bi-play-fill text-primary fs-1"></i>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left">
        <div class="mb-4">
          <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-camera me-2"></i>Tentang Kami
          </span>
        </div>
        <h2 class="display-5 fw-bold mb-4" style="color: #1e293b;">
          Ruang Kreatif untuk<br>
          <span class="text-primary">Setiap Momen Berharga</span>
        </h2>
        <p class="fs-5 text-muted mb-4 lh-lg">
          StarShot Studio adalah studio foto profesional yang menyediakan berbagai layanan fotografi untuk kebutuhan pribadi, keluarga, hingga komersial dengan hasil berkualitas tinggi dan konsep kreatif yang menarik.
        </p>
        <p class="fs-5 text-muted mb-4 lh-lg">
          Kami percaya setiap momen memiliki cerita yang indah, dan kami hadir untuk mengabadikannya dengan sentuhan profesional dan artistik terbaik.
        </p>
        
        <!-- Features List -->
        <div class="row g-3 mt-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                <i class="bi bi-check-lg text-primary fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Kamera Profesional</h6>
                <p class="text-muted small mb-0">Full frame & lighting system</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                <i class="bi bi-check-lg text-primary fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Beragam Backdrop</h6>
                <p class="text-muted small mb-0">Tema & konsep variatif</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                <i class="bi bi-check-lg text-primary fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Fotografer Handal</h6>
                <p class="text-muted small mb-0">Tim berpengalaman & kreatif</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                <i class="bi bi-check-lg text-primary fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Free Editing</h6>
                <p class="text-muted small mb-0">Hasil foto siap pakai</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni -->
<section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
  <!-- Decorative Elements -->
  <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.05;">
    <div class="position-absolute" style="top: 20%; left: 5%; font-size: 150px;">📷</div>
    <div class="position-absolute" style="bottom: 20%; right: 10%; font-size: 120px;">📸</div>
    <div class="position-absolute" style="top: 50%; left: 50%; font-size: 100px; transform: translate(-50%, -50%);">🎨</div>
  </div>
  
  <div class="container py-5 position-relative">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge bg-white bg-opacity-25 text-white px-4 py-2 rounded-pill mb-3">
        <i class="bi bi-chat-quote me-2"></i>Testimoni
      </span>
      <h2 class="display-5 fw-bold text-white mb-3">
        Apa Kata Mereka Tentang Kami
      </h2>
      <p class="text-white-50 fs-5 mx-auto" style="max-width: 600px;">
        Kepuasan klien adalah prioritas kami. Simak pengalaman mereka bersama StarShot Studio.
      </p>
    </div>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card border-0 rounded-4 h-100 shadow-lg overflow-hidden"
             style="transition: all 0.3s; backdrop-filter: blur(10px); background: rgba(255,255,255,0.95);"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="card-body p-4">
            <!-- Star Rating -->
            <div class="mb-3">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted fst-italic fs-6 mb-4 lh-lg">
              "Hasil fotonya sangat memuaskan! Fotografernya profesional dan sabar memberi arahan. Konsepnya juga keren banget!"
            </p>
            <div class="d-flex align-items-center mt-auto">
              <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                   style="width: 50px; height: 50px;">
                <span class="text-white fw-bold fs-5">S</span>
              </div>
              <div>
                <h6 class="fw-bold mb-0 text-dark">Sari</h6>
                <small class="text-muted">Bride to be</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-0 rounded-4 h-100 shadow-lg overflow-hidden"
             style="transition: all 0.3s; backdrop-filter: blur(10px); background: rgba(255,255,255,0.95);"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted fst-italic fs-6 mb-4 lh-lg">
              "Studio nyaman, backdrop banyak pilihan. Cocok banget buat foto produk bisnis saya. Hasil editingnya juga cepat!"
            </p>
            <div class="d-flex align-items-center mt-auto">
              <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center me-3"
                   style="width: 50px; height: 50px;">
                <span class="text-dark fw-bold fs-5">B</span>
              </div>
              <div>
                <h6 class="fw-bold mb-0 text-dark">Budi</h6>
                <small class="text-muted">Owner UMKM</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card border-0 rounded-4 h-100 shadow-lg overflow-hidden"
             style="transition: all 0.3s; backdrop-filter: blur(10px); background: rgba(255,255,255,0.95);"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted fst-italic fs-6 mb-4 lh-lg">
              "Foto keluarga kami jadi sangat indah dan natural. Tim sangat ramah terutama sama anak-anak. Recommended!"
            </p>
            <div class="d-flex align-items-center mt-auto">
              <div class="bg-success rounded-circle d-flex align-items-center justify-content-center me-3"
                   style="width: 50px; height: 50px;">
                <span class="text-white fw-bold fs-5">L</span>
              </div>
              <div>
                <h6 class="fw-bold mb-0 text-dark">Lisa</h6>
                <small class="text-muted">Ibu Rumah Tangga</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lokasi -->
<section id="lokasi" class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
  <div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3">
        <i class="bi bi-geo-alt me-2"></i>Lokasi
      </span>
      <h2 class="display-5 fw-bold mb-3" style="color: #1e293b;">
        Temukan Kami di <span class="text-primary">Surakarta</span>
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
        Kunjungi studio kami dan rasakan pengalaman fotografi yang profesional
      </p>
    </div>

    <div class="row g-4 align-items-center">
      <!-- Map -->
      <div class="col-lg-8" data-aos="fade-right">
        <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="height: 450px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.57336626308!2d110.32420344999999!3d-6.9932398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1234567890"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <!-- Overlay Badge -->
          <div class="position-absolute top-0 start-0 m-4">
            <div class="bg-white rounded-pill px-4 py-2 shadow-sm">
              <i class="bi bi-pin-map-fill text-danger me-2"></i>
              <span class="fw-semibold">StarShot Studio</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Info Cards -->
      <div class="col-lg-4" data-aos="fade-left">
        <div class="d-flex flex-column gap-3">
          <!-- Alamat -->
          <div class="card border-0 rounded-4 shadow-sm p-4"
               style="transition: all 0.3s;"
               onmouseover="this.style.transform='translateX(10px)'"
               onmouseout="this.style.transform='translateX(0)'">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-2">Alamat</h6>
                <p class="text-muted mb-0 small">
                  Jl. Pandanaran No. 123<br>
                  Semarang Tengah, Jawa Tengah<br>
                  50134
                </p>
              </div>
            </div>
          </div>

          <!-- Jam Operasional -->
          <div class="card border-0 rounded-4 shadow-sm p-4"
               style="transition: all 0.3s;"
               onmouseover="this.style.transform='translateX(10px)'"
               onmouseout="this.style.transform='translateX(0)'">
            <div class="d-flex align-items-start">
              <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-clock-fill text-success fs-4"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-2">Jam Operasional</h6>
                <p class="text-muted mb-1 small">
                  <i class="bi bi-circle-fill text-success me-2" style="font-size: 6px;"></i>Senin - Jumat: 09.00 - 21.00
                </p>
                <p class="text-muted mb-1 small">
                  <i class="bi bi-circle-fill text-success me-2" style="font-size: 6px;"></i>Sabtu - Minggu: 08.00 - 22.00
                </p>
              </div>
            </div>
          </div>

          <!-- Telepon -->
          <div class="card border-0 rounded-4 shadow-sm p-4"
               style="transition: all 0.3s;"
               onmouseover="this.style.transform='translateX(10px)'"
               onmouseout="this.style.transform='translateX(0)'">
            <div class="d-flex align-items-start">
              <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-telephone-fill text-warning fs-4"></i>
              </div>
              <div class="flex-grow-1">
                <h6 class="fw-bold mb-2">Hubungi Kami</h6>
                <p class="text-muted mb-2 small">
                  <i class="bi bi-whatsapp text-success me-2"></i>+62 812-3456-7890
                </p>
                <p class="text-muted mb-0 small">
                  <i class="bi bi-envelope text-danger me-2"></i>info@starshotstudio.com
                </p>
              </div>
            </div>
          </div>

          <!-- CTA Button -->
          <a href="https://www.google.com/maps/dir/?api=1&destination=-6.9932398,110.32420344999999" 
             target="_blank"
             class="btn btn-primary btn-lg rounded-pill w-100 shadow-sm mt-2"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
            <i class="bi bi-navigation-fill me-2"></i>Petunjuk Arah
          </a>
        </div>
      </div>
    </div>

    <!-- Additional Info -->
    <div class="row mt-5 g-4" data-aos="fade-up">
      <div class="col-md-3 col-6 text-center">
        <div class="bg-white rounded-4 p-4 shadow-sm h-100">
          <i class="bi bi-car-front-fill text-primary fs-1 mb-3 d-block"></i>
          <h6 class="fw-bold mb-2">Parkir Luas</h6>
          <p class="text-muted small mb-0">Gratis untuk pelanggan</p>
        </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="bg-white rounded-4 p-4 shadow-sm h-100">
          <i class="bi bi-wifi text-primary fs-1 mb-3 d-block"></i>
          <h6 class="fw-bold mb-2">WiFi Gratis</h6>
          <p class="text-muted small mb-0">High-speed internet</p>
        </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="bg-white rounded-4 p-4 shadow-sm h-100">
          <i class="bi bi-cup-hot-fill text-primary fs-1 mb-3 d-block"></i>
          <h6 class="fw-bold mb-2">Ruang Tunggu</h6>
          <p class="text-muted small mb-0">Snack & minuman</p>
        </div>
      </div>
      <div class="col-md-3 col-6 text-center">
        <div class="bg-white rounded-4 p-4 shadow-sm h-100">
          <i class="bi bi-shield-check text-primary fs-1 mb-3 d-block"></i>
          <h6 class="fw-bold mb-2">Aman & Nyaman</h6>
          <p class="text-muted small mb-0">Area terjaga 24/7</p>
        </div>
      </div>
    </div>
  </div>
</section>

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

.btn:hover {
  transition: all 0.3s ease;
}

.card {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<?php include 'includes/footer.php'; ?>
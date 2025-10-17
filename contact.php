<?php
include 'includes/head.php';
include 'includes/navbar.php';

// Handle form submission
$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Here you would typically send email or save to database
    // For now, just show success message
    $success_message = "Terima kasih! Pesan Anda telah terkirim. Tim kami akan menghubungi Anda segera.";
}
?>

<!-- Hero Section Kontak -->
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
      <i class="bi bi-headset me-2"></i>Contact Us
    </span>
    <h1 class="display-3 fw-bold mb-4">
      Hubungi <span style="color: #FFB84D;">Kami</span>
    </h1>
    <p class="lead fs-4 mx-auto" style="max-width: 700px;">
      Ada pertanyaan? Tim kami siap membantu Anda 24/7
    </p>
  </div>
</section>

<!-- Contact Info Cards -->
<section class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%); margin-top: -50px;">
  <div class="container">
    <div class="row g-4" data-aos="fade-up">
      <!-- WhatsApp -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);">
            <i class="bi bi-whatsapp text-white" style="font-size: 40px;"></i>
          </div>
          <h5 class="fw-bold mb-3">WhatsApp</h5>
          <p class="text-muted mb-3">Chat langsung dengan tim kami</p>
          <h6 class="fw-bold mb-3" style="color: #25D366;">+62 812-3456-7890</h6>
          <a href="https://wa.me/6281234567890" target="_blank" 
             class="btn btn-success rounded-pill px-4">
            <i class="bi bi-whatsapp me-2"></i>Chat Now
          </a>
        </div>
      </div>

      <!-- Phone -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);">
            <i class="bi bi-telephone-fill text-white" style="font-size: 40px;"></i>
          </div>
          <h5 class="fw-bold mb-3">Telepon</h5>
          <p class="text-muted mb-3">Hubungi kami via telepon</p>
          <h6 class="fw-bold mb-3" style="color: #5B8DEE;">(024) 8765-4321</h6>
          <a href="tel:+622487654321" class="btn rounded-pill px-4"
             style="background: #5B8DEE; color: white; border: none;">
            <i class="bi bi-telephone me-2"></i>Call Now
          </a>
        </div>
      </div>

      <!-- Email -->
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFB84D 0%, #FFA726 100%);">
            <i class="bi bi-envelope-fill text-white" style="font-size: 40px;"></i>
          </div>
          <h5 class="fw-bold mb-3">Email</h5>
          <p class="text-muted mb-3">Kirim email kepada kami</p>
          <h6 class="fw-bold mb-3" style="color: #FFB84D;">info@starshotstudio.com</h6>
          <a href="mailto:info@starshotstudio.com" class="btn rounded-pill px-4"
             style="background: #FFB84D; color: #000; border: none;">
            <i class="bi bi-envelope me-2"></i>Send Email
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form & Map -->
<section class="py-5 bg-white">
  <div class="container py-5">
    <div class="row g-5 align-items-start">
      <!-- Contact Form -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="mb-4">
          <span class="badge px-3 py-2 rounded-pill mb-3"
                style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
            <i class="bi bi-chat-dots me-2"></i>Kirim Pesan
          </span>
          <h2 class="display-6 fw-bold mb-3" style="color: #1e293b;">
            Ada Pertanyaan? <span style="color: #5B8DEE;">Hubungi Kami</span>
          </h2>
          <p class="text-muted fs-5 mb-4">
            Isi formulir di bawah ini dan tim kami akan merespons dalam 1x24 jam
          </p>
        </div>

        <?php if ($success_message): ?>
          <div class="alert alert-success rounded-4 d-flex align-items-center mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-3" style="font-size: 24px;"></i>
            <div><?= $success_message ?></div>
          </div>
        <?php endif; ?>

        <?php if ($error_message): ?>
          <div class="alert alert-danger rounded-4 d-flex align-items-center mb-4" role="alert">
            <i class="bi bi-exclamation-circle-fill me-3" style="font-size: 24px;"></i>
            <div><?= $error_message ?></div>
          </div>
        <?php endif; ?>

        <form method="POST" action="" class="contact-form">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label fw-semibold">
                <i class="bi bi-person me-2" style="color: #5B8DEE;"></i>Nama Lengkap
              </label>
              <input type="text" class="form-control form-control-lg rounded-3" 
                     id="name" name="name" placeholder="John Doe" required>
            </div>

            <div class="col-md-6">
              <label for="phone" class="form-label fw-semibold">
                <i class="bi bi-phone me-2" style="color: #5B8DEE;"></i>Nomor Telepon
              </label>
              <input type="tel" class="form-control form-control-lg rounded-3" 
                     id="phone" name="phone" placeholder="0812-xxxx-xxxx" required>
            </div>

            <div class="col-12">
              <label for="email" class="form-label fw-semibold">
                <i class="bi bi-envelope me-2" style="color: #5B8DEE;"></i>Email
              </label>
              <input type="email" class="form-control form-control-lg rounded-3" 
                     id="email" name="email" placeholder="johndoe@email.com" required>
            </div>

            <div class="col-12">
              <label for="subject" class="form-label fw-semibold">
                <i class="bi bi-tag me-2" style="color: #5B8DEE;"></i>Subjek
              </label>
              <select class="form-select form-select-lg rounded-3" id="subject" name="subject" required>
                <option value="" disabled selected>Pilih subjek pesan</option>
                <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                <option value="Booking Konsultasi">Booking & Konsultasi</option>
                <option value="Custom Package">Custom Package</option>
                <option value="Komplain">Komplain & Feedback</option>
                <option value="Partnership">Partnership</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>

            <div class="col-12">
              <label for="message" class="form-label fw-semibold">
                <i class="bi bi-chat-left-text me-2" style="color: #5B8DEE;"></i>Pesan
              </label>
              <textarea class="form-control form-control-lg rounded-3" 
                        id="message" name="message" rows="5" 
                        placeholder="Tulis pesan Anda di sini..." required></textarea>
              <small class="text-muted">Minimal 20 karakter</small>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agree" required>
                <label class="form-check-label text-muted" for="agree">
                  Saya setuju dengan <a href="#" class="text-decoration-none" style="color: #5B8DEE;">kebijakan privasi</a>
                </label>
              </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-lg rounded-pill px-5 py-3 fw-semibold w-100"
                      style="background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%); color: white; border: none; transition: all 0.3s;"
                      onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 25px rgba(91, 141, 238, 0.4)'"
                      onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                <i class="bi bi-send me-2"></i>Kirim Pesan
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Map & Info -->
      <div class="col-lg-6" data-aos="fade-left">
        <!-- Map -->
        <div class="position-relative rounded-4 overflow-hidden shadow-lg mb-4" style="height: 400px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.57336626308!2d110.32420344999999!3d-6.9932398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1234567890"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
          <!-- Map Badge -->
          <div class="position-absolute top-0 start-0 m-3">
            <div class="bg-white rounded-pill px-4 py-2 shadow-sm">
              <i class="bi bi-pin-map-fill text-danger me-2"></i>
              <span class="fw-semibold">StarShot Studio</span>
            </div>
          </div>
        </div>

        <!-- Office Info -->
        <div class="card border-0 rounded-4 shadow-sm p-4 mb-4">
          <h5 class="fw-bold mb-4" style="color: #1e293b;">
            <i class="bi bi-building me-2" style="color: #5B8DEE;"></i>Informasi Kantor
          </h5>
          
          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-geo-alt-fill fs-4 me-3" style="color: #5B8DEE;"></i>
            <div>
              <strong class="d-block mb-1">Alamat</strong>
              <p class="text-muted mb-0">
                Jl. Pandanaran No. 123<br>
                Semarang Tengah, Jawa Tengah 50134
              </p>
            </div>
          </div>

          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-clock-fill fs-4 me-3" style="color: #FFB84D;"></i>
            <div>
              <strong class="d-block mb-1">Jam Operasional</strong>
              <p class="text-muted mb-1">Senin - Jumat: 09.00 - 21.00</p>
              <p class="text-muted mb-0">Sabtu - Minggu: 08.00 - 22.00</p>
            </div>
          </div>

          <div class="d-flex align-items-start">
            <i class="bi bi-calendar-check fs-4 me-3 text-success"></i>
            <div>
              <strong class="d-block mb-1">Booking Online</strong>
              <p class="text-muted mb-2">Tersedia 24/7 via website</p>
              <a href="booking/bookingForm.php" class="btn btn-sm btn-success rounded-pill px-3">
                <i class="bi bi-calendar-plus me-2"></i>Book Now
              </a>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="card border-0 rounded-4 shadow-sm p-4">
          <h5 class="fw-bold mb-4" style="color: #1e293b;">
            <i class="bi bi-share me-2" style="color: #5B8DEE;"></i>Follow Us
          </h5>
          <div class="d-flex gap-3">
            <a href="#" class="btn btn-lg rounded-circle d-flex align-items-center justify-content-center"
               style="width: 50px; height: 50px; background: linear-gradient(135deg, #E4405F 0%, #C13584 100%); color: white; border: none;">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="btn btn-lg rounded-circle d-flex align-items-center justify-content-center"
               style="width: 50px; height: 50px; background: #1877F2; color: white; border: none;">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="btn btn-lg rounded-circle d-flex align-items-center justify-content-center"
               style="width: 50px; height: 50px; background: #FF0000; color: white; border: none;">
              <i class="bi bi-youtube"></i>
            </a>
            <a href="#" class="btn btn-lg rounded-circle d-flex align-items-center justify-content-center"
               style="width: 50px; height: 50px; background: #0A66C2; color: white; border: none;">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="#" class="btn btn-lg rounded-circle d-flex align-items-center justify-content-center"
               style="width: 50px; height: 50px; background: #1DA1F2; color: white; border: none;">
              <i class="bi bi-twitter"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Quick -->
<section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
  <div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge px-4 py-2 rounded-pill mb-3"
            style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
        <i class="bi bi-question-circle me-2"></i>FAQ Cepat
      </span>
      <h2 class="display-6 fw-bold mb-3" style="color: #1e293b;">
        Pertanyaan <span style="color: #5B8DEE;">Umum</span>
      </h2>
    </div>

    <div class="row g-4">
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
          <div class="d-flex align-items-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                 style="width: 50px; height: 50px; background: rgba(91, 141, 238, 0.1); flex-shrink: 0;">
              <i class="bi bi-clock-fill" style="color: #5B8DEE; font-size: 24px;"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-2">Berapa lama respon waktu?</h5>
              <p class="text-muted mb-0">Tim kami akan merespons dalam 1x24 jam di hari kerja. Untuk urgent bisa via WhatsApp.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
          <div class="d-flex align-items-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                 style="width: 50px; height: 50px; background: rgba(255, 184, 77, 0.2); flex-shrink: 0;">
              <i class="bi bi-calendar-check-fill" style="color: #FFB84D; font-size: 24px;"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-2">Apakah bisa konsultasi gratis?</h5>
              <p class="text-muted mb-0">Ya! Konsultasi awal gratis. Anda bisa diskusi konsep, harga, dan kebutuhan tanpa biaya.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
          <div class="d-flex align-items-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                 style="width: 50px; height: 50px; background: rgba(40, 167, 69, 0.1); flex-shrink: 0;">
              <i class="bi bi-geo-alt-fill text-success" style="font-size: 24px;"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-2">Apakah studio mudah diakses?</h5>
              <p class="text-muted mb-0">Ya, lokasi strategis di pusat kota dengan parkir luas dan akses mudah dari berbagai arah.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card border-0 rounded-4 shadow-sm p-4 h-100">
          <div class="d-flex align-items-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                 style="width: 50px; height: 50px; background: rgba(232, 62, 140, 0.1); flex-shrink: 0;">
              <i class="bi bi-chat-dots-fill" style="color: #e83e8c; font-size: 24px;"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-2">Bisa request fotografer?</h5>
              <p class="text-muted mb-0">Tentu! Anda bisa request fotografer sesuai preferensi dan gaya fotografi yang diinginkan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <p class="text-muted mb-3">Tidak menemukan jawaban yang Anda cari?</p>
      <a href="about.php#faq" class="btn btn-lg rounded-pill px-5 py-3"
         style="background: #5B8DEE; color: white; border: none;">
        <i class="bi bi-question-circle me-2"></i>Lihat Semua FAQ
      </a>
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

.form-control, .form-select {
  border: 2px solid #e2e8f0;
  transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
  border-color: #5B8DEE;
  box-shadow: 0 0 0 4px rgba(91, 141, 238, 0.1);
}

.card {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<?php include 'includes/footer.php'; ?>
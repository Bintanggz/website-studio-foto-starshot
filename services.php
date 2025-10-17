<?php
include 'includes/head.php';
include 'includes/navbar.php';
include 'connection.php';

// Ambil semua studio aktif & tersedia
$query = "SELECT * FROM studio WHERE status = 'active' AND is_available = 1 ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

// Simpan data dalam array untuk digunakan nanti
$studios = [];
if ($result) {
  while ($studio = mysqli_fetch_assoc($result)) {
    $studios[] = $studio;
  }
}
?>

<!-- Hero Section Layanan -->
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
      <i class="bi bi-camera-fill me-2"></i>Our Services
    </span>
    <h1 class="display-3 fw-bold mb-4">
      Layanan <span style="color: #FFB84D;">Foto Studio</span>
    </h1>
    <p class="lead fs-4 mx-auto" style="max-width: 700px;">
      Berbagai paket layanan fotografi profesional untuk memenuhi setiap kebutuhan Anda
    </p>
  </div>
</section>

<!-- Layanan Utama (Dynamic from Database) -->
<section class="py-5" style="background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);">
  <div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge px-4 py-2 rounded-pill mb-3"
            style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
        <i class="bi bi-star me-2"></i>Layanan Unggulan
      </span>
      <h2 class="display-5 fw-bold mb-3" style="color: #1e293b;">
        Studio <span style="color: #5B8DEE;">Fotografi</span> Kami
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
        Pilih studio yang sesuai dengan kebutuhan Anda
      </p>
    </div>

    <div class="row g-4">
      <?php if (count($studios) > 0): ?>
        <?php 
        $delay = 100;
        $colors = [
          ['gradient' => 'linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%)', 'icon_color' => '#5B8DEE', 'button_bg' => '#5B8DEE', 'button_hover' => '#4A7FDD', 'badge_bg' => '#FFB84D', 'badge_color' => '#000'],
          ['gradient' => 'linear-gradient(135deg, #FFB84D 0%, #FFA726 100%)', 'icon_color' => '#FFB84D', 'button_bg' => '#FFB84D', 'button_hover' => '#FFA726', 'badge_bg' => 'rgba(91, 141, 238, 0.2)', 'badge_color' => '#5B8DEE'],
          ['gradient' => 'linear-gradient(135deg, #28a745 0%, #20c997 100%)', 'icon_color' => '#28a745', 'button_bg' => '#28a745', 'button_hover' => '#20c997', 'badge_bg' => 'rgba(255, 184, 77, 0.2)', 'badge_color' => '#FFB84D'],
          ['gradient' => 'linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%)', 'icon_color' => '#6f42c1', 'button_bg' => '#6f42c1', 'button_hover' => '#5a32a3', 'badge_bg' => 'rgba(40, 167, 69, 0.2)', 'badge_color' => '#28a745'],
          ['gradient' => 'linear-gradient(135deg, #e83e8c 0%, #d63384 100%)', 'icon_color' => '#e83e8c', 'button_bg' => '#e83e8c', 'button_hover' => '#d63384', 'badge_bg' => 'rgba(111, 66, 193, 0.2)', 'badge_color' => '#6f42c1'],
          ['gradient' => 'linear-gradient(135deg, #fd7e14 0%, #e66a00 100%)', 'icon_color' => '#fd7e14', 'button_bg' => '#fd7e14', 'button_hover' => '#e66a00', 'badge_bg' => 'rgba(232, 62, 140, 0.2)', 'badge_color' => '#e83e8c']
        ];
        $color_index = 0;
        ?>
        <?php foreach ($studios as $index => $studio): ?>
          <?php 
          $color = $colors[$color_index % count($colors)];
          $is_popular = $index < 2; // Tandai 2 studio pertama sebagai popular
          ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay; ?>">
            <div class="card border-0 rounded-4 shadow-sm h-100 overflow-hidden"
                 style="transition: all 0.3s;"
                 onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">
              
              <div class="position-relative" style="height: 250px; overflow: hidden;">
                <?php if (!empty($studio['image']) && file_exists('assets/studio/' . $studio['image'])): ?>
                  <img 
                    src="assets/studio/<?= htmlspecialchars($studio['image']); ?>" 
                    alt="<?= htmlspecialchars($studio['name']); ?>" 
                    class="w-100 h-100" 
                    style="object-fit: cover; transition: transform 0.3s;"
                    onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)'"
                  >
                  <!-- Overlay gradient untuk readability badge -->
                  <div class="position-absolute w-100 h-100 top-0 start-0" 
                       style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, transparent 30%);"></div>
                <?php else: ?>
                  <div style="background: <?= $color['gradient']; ?>; height: 100%;" class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-camera-fill text-white" style="font-size: 80px; opacity: 0.8;"></i>
                  </div>
                <?php endif; ?>
                
                <!-- Badge -->
                <?php if ($is_popular): ?>
                <div class="position-absolute top-0 end-0 m-3">
                  <span class="badge px-3 py-2 rounded-pill" style="background: <?= $color['badge_bg']; ?>; color: <?= $color['badge_color']; ?>;">
                    <i class="bi bi-star-fill me-1"></i>Popular
                  </span>
                </div>
                <?php endif; ?>
              </div>

              <div class="card-body p-4">
                <h4 class="fw-bold mb-3" style="color: #1e293b;"><?= htmlspecialchars($studio['name']); ?></h4>
                <p class="text-muted mb-4">
                  <?= nl2br(htmlspecialchars($studio['description'])); ?>
                </p>
                <ul class="list-unstyled mb-4">
                  <li class="mb-2">
                    <i class="bi bi-geo-alt-fill me-2" style="color: <?= $color['icon_color']; ?>;"></i>
                    <span class="text-muted"><?= htmlspecialchars($studio['location']); ?></span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check-circle-fill me-2" style="color: <?= $color['icon_color']; ?>;"></i>
                    <span class="text-muted">Studio tersedia</span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check-circle-fill me-2" style="color: <?= $color['icon_color']; ?>;"></i>
                    <span class="text-muted">Fasilitas lengkap</span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check-circle-fill me-2" style="color: <?= $color['icon_color']; ?>;"></i>
                    <span class="text-muted">Fotografer profesional</span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check-circle-fill me-2" style="color: <?= $color['icon_color']; ?>;"></i>
                    <span class="text-muted">Hasil foto berkualitas tinggi</span>
                  </li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <small class="text-muted d-block">Mulai dari</small>
                    <h3 class="fw-bold mb-0" style="color: <?= $color['icon_color']; ?>;">
                      Rp <?= number_format($studio['price_per_hour'], 0, ',', '.'); ?>/jam
                    </h3>
                  </div>
                </div>
                <a href="booking/bookingForm.php?studio_id=<?= $studio['id']; ?>" 
                   class="btn btn-lg rounded-pill w-100 fw-semibold"
                   style="background: <?= $color['button_bg']; ?>; color: white; border: none; transition: all 0.3s;"
                   onmouseover="this.style.background='<?= $color['button_hover']; ?>'"
                   onmouseout="this.style.background='<?= $color['button_bg']; ?>'">
                  <i class="bi bi-calendar-check me-2"></i>Book Now
                </a>
              </div>
            </div>
          </div>
          <?php 
          $delay += 100;
          $color_index++;
          ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12 text-center py-5">
          <i class="bi bi-camera-fill text-muted mb-3" style="font-size: 60px;"></i>
          <h4 class="text-muted">Belum ada layanan studio yang tersedia saat ini.</h4>
          <p class="text-muted">Silakan hubungi kami untuk informasi lebih lanjut.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Tambahan Layanan -->
<section class="py-5 bg-white">
  <div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge px-4 py-2 rounded-pill mb-3"
            style="background: rgba(255, 184, 77, 0.2); color: #FFB84D;">
        <i class="bi bi-plus-circle me-2"></i>Extra Services
      </span>
      <h2 class="display-5 fw-bold mb-3" style="color: #1e293b;">
        Layanan <span style="color: #FFB84D;">Tambahan</span>
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
        Sempurnakan paket Anda dengan layanan tambahan kami
      </p>
    </div>

    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'"
             onmouseout="this.style.transform='translateY(0)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: rgba(91, 141, 238, 0.1);">
            <i class="bi bi-palette-fill fs-2" style="color: #5B8DEE;"></i>
          </div>
          <h5 class="fw-bold mb-3">Makeup Artist</h5>
          <p class="text-muted mb-3">
            Professional makeup untuk hasil foto yang lebih maksimal
          </p>
          <h4 class="fw-bold mb-0" style="color: #5B8DEE;">+300rb</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'"
             onmouseout="this.style.transform='translateY(0)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: rgba(255, 184, 77, 0.2);">
            <i class="bi bi-film fs-2" style="color: #FFB84D;"></i>
          </div>
          <h5 class="fw-bold mb-3">Video Cinematic</h5>
          <p class="text-muted mb-3">
            Tambahan dokumentasi video untuk paket foto Anda
          </p>
          <h4 class="fw-bold mb-0" style="color: #FFB84D;">+2jt</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'"
             onmouseout="this.style.transform='translateY(0)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: rgba(40, 167, 69, 0.1);">
            <i class="bi bi-printer-fill fs-2 text-success"></i>
          </div>
          <h5 class="fw-bold mb-3">Cetak Foto</h5>
          <p class="text-muted mb-3">
            Cetak foto ukuran poster atau photo print berkualitas
          </p>
          <h4 class="fw-bold mb-0 text-success">Mulai 50rb</h4>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="card border-0 rounded-4 shadow-sm h-100 p-4 text-center"
             style="transition: all 0.3s;"
             onmouseover="this.style.transform='translateY(-10px)'"
             onmouseout="this.style.transform='translateY(0)'">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-3"
               style="width: 80px; height: 80px; background: rgba(220, 53, 69, 0.1);">
            <i class="bi bi-drone fs-2 text-danger"></i>
          </div>
          <h5 class="fw-bold mb-3">Drone Shot</h5>
          <p class="text-muted mb-3">
            Pengambilan foto aerial untuk hasil yang lebih spektakuler
          </p>
          <h4 class="fw-bold mb-0 text-danger">+1.5jt</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Proses Booking -->
<section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
  <div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="badge px-4 py-2 rounded-pill mb-3"
            style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
        <i class="bi bi-list-check me-2"></i>Cara Booking
      </span>
      <h2 class="display-5 fw-bold mb-3" style="color: #1e293b;">
        Mudah & <span style="color: #5B8DEE;">Cepat</span>
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 600px;">
        Hanya 4 langkah untuk booking studio foto kami
      </p>
    </div>

    <div class="row g-4 align-items-center">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="text-center position-relative">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-4 position-relative"
               style="width: 100px; height: 100px; background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%); box-shadow: 0 10px 30px rgba(91, 141, 238, 0.3);">
            <span class="text-white fw-bold" style="font-size: 40px;">1</span>
            <div class="d-none d-lg-block position-absolute" style="right: -60px; top: 50%; transform: translateY(-50%);">
              <i class="bi bi-arrow-right text-muted" style="font-size: 30px; opacity: 0.3;"></i>
            </div>
          </div>
          <h5 class="fw-bold mb-3">Pilih Studio</h5>
          <p class="text-muted">
            Pilih studio yang sesuai dengan kebutuhan Anda
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="text-center position-relative">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-4 position-relative"
               style="width: 100px; height: 100px; background: linear-gradient(135deg, #FFB84D 0%, #FFA726 100%); box-shadow: 0 10px 30px rgba(255, 184, 77, 0.3);">
            <span class="text-dark fw-bold" style="font-size: 40px;">2</span>
            <div class="d-none d-lg-block position-absolute" style="right: -60px; top: 50%; transform: translateY(-50%);">
              <i class="bi bi-arrow-right text-muted" style="font-size: 30px; opacity: 0.3;"></i>
            </div>
          </div>
          <h5 class="fw-bold mb-3">Isi Form</h5>
          <p class="text-muted">
            Lengkapi formulir booking dengan data dan jadwal yang Anda inginkan
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="text-center position-relative">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-4 position-relative"
               style="width: 100px; height: 100px; background: linear-gradient(135deg, #28a745 0%, #20c997 100%); box-shadow: 0 10px 30px rgba(40, 167, 69, 0.3);">
            <span class="text-white fw-bold" style="font-size: 40px;">3</span>
            <div class="d-none d-lg-block position-absolute" style="right: -60px; top: 50%; transform: translateY(-50%);">
              <i class="bi bi-arrow-right text-muted" style="font-size: 30px; opacity: 0.3;"></i>
            </div>
          </div>
          <h5 class="fw-bold mb-3">Konfirmasi</h5>
          <p class="text-muted">
            Tim kami akan menghubungi untuk konfirmasi dan pembayaran DP
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="text-center">
          <div class="rounded-circle d-inline-flex align-items-center justify-content-center mx-auto mb-4"
               style="width: 100px; height: 100px; background: linear-gradient(135deg, #e83e8c 0%, #d63384 100%); box-shadow: 0 10px 30px rgba(232, 62, 140, 0.3);">
            <span class="text-white fw-bold" style="font-size: 40px;">4</span>
          </div>
          <h5 class="fw-bold mb-3">Foto Session</h5>
          <p class="text-muted">
            Datang sesuai jadwal dan nikmati sesi foto profesional Anda
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-white">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-5" data-aos="fade-right">
        <span class="badge px-4 py-2 rounded-pill mb-3"
              style="background: rgba(91, 141, 238, 0.1); color: #5B8DEE;">
          <i class="bi bi-question-circle me-2"></i>FAQ
        </span>
        <h2 class="display-5 fw-bold mb-4" style="color: #1e293b;">
          Pertanyaan yang Sering <span style="color: #5B8DEE;">Ditanyakan</span>
        </h2>
        <p class="text-muted fs-5 mb-4 lh-lg">
          Temukan jawaban untuk pertanyaan umum seputar layanan kami. Tidak menemukan jawaban yang Anda cari? Hubungi kami!
        </p>
        <a href="booking/bookingForm.php" class="btn btn-lg rounded-pill px-5 py-3 fw-semibold"
           style="background: #5B8DEE; color: white; border: none; transition: all 0.3s;"
           onmouseover="this.style.background='#4A7FDD'"
           onmouseout="this.style.background='#5B8DEE'">
          <i class="bi bi-chat-dots me-2"></i>Hubungi Kami
        </a>
      </div>

      <div class="col-lg-7" data-aos="fade-left">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item border-0 rounded-4 shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                      style="background: rgba(91, 141, 238, 0.05); color: #1e293b;">
                <i class="bi bi-clock-fill me-3" style="color: #5B8DEE;"></i>
                Berapa lama durasi sesi foto?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Durasi sesi foto bervariasi tergantung paket yang dipilih. Umumnya berkisar 1-4 jam. Untuk paket wedding bisa full day hingga 8-12 jam.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 rounded-4 shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2"
                      style="background: rgba(91, 141, 238, 0.05); color: #1e293b;">
                <i class="bi bi-calendar-event me-3" style="color: #FFB84D;"></i>
                Apakah bisa reschedule?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Ya, reschedule bisa dilakukan maksimal H-3 sebelum jadwal. Untuk reschedule mendadak akan dikenakan biaya admin 10% dari total pembayaran.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 rounded-4 shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3"
                      style="background: rgba(91, 141, 238, 0.05); color: #1e293b;">
                <i class="bi bi-cash-stack me-3 text-success"></i>
                Bagaimana sistem pembayaran?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Sistem pembayaran DP 50% saat booking, dan pelunasan 50% setelah sesi foto selesai. Kami menerima transfer bank, e-wallet, dan cash.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 rounded-4 shadow-sm mb-3">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4"
                      style="background: rgba(91, 141, 238, 0.05); color: #1e293b;">
                <i class="bi bi-image me-3 text-danger"></i>
                Kapan hasil foto bisa diambil?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Hasil editing foto siap dalam 7-14 hari kerja tergantung paket. Untuk express bisa 3-5 hari dengan tambahan biaya. Hasil dikirim via Google Drive/Dropbox.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 rounded-4 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed rounded-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5"
                      style="background: rgba(91, 141, 238, 0.05); color: #1e293b;">
                <i class="bi bi-scissors me-3" style="color: #6f42c1;"></i>
                Apakah ada revisi editing?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Ya, kami menyediakan 2x revisi gratis untuk semua paket. Revisi tambahan akan dikenakan biaya sesuai kesepakatan.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%); position: relative; overflow: hidden;">
  <!-- Decorative Elements -->
  <div class="position-absolute w-100 h-100" style="top: 0; left: 0; opacity: 0.1;">
    <div class="position-absolute rounded-circle" 
         style="width: 300px; height: 300px; background: white; top: -100px; right: -100px; animation: float 6s ease-in-out infinite;"></div>
    <div class="position-absolute rounded-circle" 
         style="width: 200px; height: 200px; background: white; bottom: -50px; left: 10%; animation: float 8s ease-in-out infinite;"></div>
  </div>

  <div class="container py-5 text-center text-white position-relative" data-aos="zoom-in">
    <i class="bi bi-camera-fill mb-4" style="font-size: 60px; opacity: 0.9;"></i>
    <h2 class="display-5 fw-bold mb-4">Siap Mengabadikan Momen Anda?</h2>
    <p class="lead mb-5 mx-auto" style="max-width: 600px;">
      Jangan tunggu lagi! Book sekarang dan dapatkan <span style="color: #FFB84D; font-weight: bold;">diskon 10%</span> untuk booking pertama Anda
    </p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="booking/bookingForm.php" class="btn btn-lg rounded-pill px-5 py-3 shadow-lg fw-semibold"
         style="background: #FFB84D; color: #000; border: none; transition: all 0.3s;"
         onmouseover="this.style.transform='scale(1.05)'; this.style.background='#FFA726'"
         onmouseout="this.style.transform='scale(1)'; this.style.background='#FFB84D'">
        <i class="bi bi-calendar-check me-2"></i>Booking Sekarang
      </a>
      <a href="https://wa.me/6285117097334" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-semibold"
         style="transition: all 0.3s; backdrop-filter: blur(10px); background: rgba(255,255,255,0.1);">
        <i class="bi bi-whatsapp me-2"></i>Chat WhatsApp
      </a>
    </div>
    
    <!-- Promo Badge -->
    <div class="mt-5 pt-4">
      <div class="d-inline-flex align-items-center gap-3 px-4 py-3 rounded-pill"
           style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px);">
        <i class="bi bi-gift-fill" style="font-size: 24px; color: #FFB84D;"></i>
        <div class="text-start">
          <small class="d-block text-white-50">Promo Bulan Ini</small>
          <strong class="text-white">Gratis 10 Foto Cetak untuk Paket Wedding!</strong>
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

.card {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.accordion-button:not(.collapsed) {
  background: rgba(91, 141, 238, 0.1) !important;
  color: #5B8DEE !important;
  box-shadow: none;
}

.accordion-button:focus {
  box-shadow: none;
  border-color: transparent;
}

.accordion-button::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%235B8DEE'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}
</style>

<!-- AOS & Bootstrap Scripts -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<?php include 'includes/footer.php'; ?>
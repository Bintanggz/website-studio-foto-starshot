<?php
session_start();
include '../connection.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$studio_query = "SELECT * FROM studios WHERE is_available = 1";
$studio_result = mysqli_query($conn, $studio_query);

// Pastikan user sudah login
if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.php");
  exit;
}

// Ambil data user dari DB
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarShot Studio | Booking Form</title>
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .booking-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .booking-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .booking-header {
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            padding: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .booking-header::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -150px;
            right: -150px;
        }

        .booking-header h2 {
            position: relative;
            z-index: 1;
            margin: 0;
            font-weight: 700;
        }

        .booking-header p {
            position: relative;
            z-index: 1;
            margin: 0.5rem 0 0 0;
            opacity: 0.9;
        }

        .booking-body {
            padding: 2.5rem;
        }

        .form-section {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #f1f5f9;
        }

        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-title {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-title i {
            color: #5B8DEE;
            font-size: 1.5rem;
        }

        .form-label {
            color: #475569;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-label i {
            color: #94a3b8;
            font-size: 1rem;
        }

        .form-control, .form-select {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #5B8DEE;
            box-shadow: 0 0 0 4px rgba(91, 141, 238, 0.1);
        }

        .form-control:disabled {
            background-color: #f8fafc;
            color: #64748b;
        }

        textarea.form-control {
            resize: none;
        }

        /* Studio Card Style */
        .studio-select-wrapper {
            position: relative;
        }

        .studio-info-card {
            background: linear-gradient(135deg, rgba(91, 141, 238, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 1rem;
            border: 2px solid #e2e8f0;
        }

        .studio-info-card .info-row {
            display: flex;
            align-items: start;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .studio-info-card .info-row:last-child {
            margin-bottom: 0;
        }

        .studio-info-card .info-icon {
            width: 40px;
            height: 40px;
            background: rgba(91, 141, 238, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #5B8DEE;
            flex-shrink: 0;
        }

        .studio-info-card .info-content h6 {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
        }

        .studio-info-card .info-content p {
            color: #64748b;
            margin: 0;
            font-size: 0.9rem;
        }

        /* Time Slots */
        .time-slot-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 0.75rem;
            margin-top: 1rem;
        }

        /* Total Section */
        .total-section {
            background: linear-gradient(135deg, #5B8DEE 0%, #4A7FDD 100%);
            border-radius: 16px;
            padding: 2rem;
            color: white;
            text-align: center;
        }

        .total-section .total-label {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }

        .total-section .total-amount {
            font-size: 2.5rem;
            font-weight: 800;
            color: #FFB84D;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .total-section .total-details {
            display: flex;
            justify-content: space-around;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .total-section .detail-item {
            text-align: center;
        }

        .total-section .detail-item .label {
            font-size: 0.85rem;
            opacity: 0.8;
            margin-bottom: 0.25rem;
        }

        .total-section .detail-item .value {
            font-size: 1.1rem;
            font-weight: 700;
        }

        /* Buttons */
        .btn-back {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            padding: 0.625rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            transform: translateX(-5px);
        }

        .btn-submit {
            background: linear-gradient(135deg, #FFB84D 0%, #FFA726 100%);
            color: #000;
            border: none;
            border-radius: 12px;
            padding: 1rem 3rem;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 184, 77, 0.4);
            background: linear-gradient(135deg, #FFA726 0%, #FF9800 100%);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Alert */
        .alert {
            border-radius: 12px;
            border: none;
            padding: 1rem 1.5rem;
        }

        .alert-info {
            background: rgba(91, 141, 238, 0.1);
            color: #5B8DEE;
            border-left: 4px solid #5B8DEE;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .booking-body {
                padding: 1.5rem;
            }

            .total-section .total-amount {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container booking-container">
        <!-- Header with Back Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div></div>
            <a href="../index.php" class="btn btn-back">
                <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
            </a>
        </div>

        <!-- Booking Card -->
        <div class="booking-card">
            <!-- Header -->
            <div class="booking-header">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-calendar-check-fill" style="font-size: 3rem;"></i>
                    <div>
                        <h2><i class="bi bi-camera-fill me-2"></i>Booking Studio</h2>
                        <p>Isi formulir di bawah untuk reservasi studio foto</p>
                    </div>
                </div>
            </div>

            <!-- Body -->
            <div class="booking-body">
                <form action="bookingProcess.php" method="POST" id="bookingForm">
                    <input type="hidden" name="user_id" value="<?= $user_id ?>">

                    <!-- Section 1: User Info -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="bi bi-person-circle"></i>
                            Informasi Pemesan
                        </div>

                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">
                                    <i class="bi bi-person"></i>Nama Lengkap
                                </label>
                                <input type="text" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" disabled>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">
                                    <i class="bi bi-envelope"></i>Email
                                </label>
                                <input type="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" disabled>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">
                                    <i class="bi bi-telephone"></i>Nomor Telepon
                                </label>
                                <input type="tel" class="form-control" value="<?= htmlspecialchars($user['number_phone']) ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Studio Selection -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="bi bi-camera-reels"></i>
                            Pilih Studio
                        </div>

                        <div class="mb-3">
                            <label for="studio_id" class="form-label">
                                <i class="bi bi-building"></i>Paket Studio <span class="text-danger">*</span>
                            </label>
                            <select name="studio_id" id="studio_id" class="form-select" required>
                                <option value="" selected disabled>-- Pilih Studio --</option>
                                <?php 
                                mysqli_data_seek($studio_result, 0); // Reset pointer
                                while ($studio = mysqli_fetch_assoc($studio_result)): 
                                ?>
                                  <option value="<?= $studio['id'] ?>" 
                                          data-price="<?= $studio['price_per_hour'] ?>"
                                          data-location="<?= htmlspecialchars($studio['location']) ?>"
                                          data-description="<?= htmlspecialchars($studio['description']) ?>">
                                    <?= $studio['name'] ?> - Rp <?= number_format($studio['price_per_hour'], 0, ',', '.') ?>/jam
                                  </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <!-- Studio Info Card (Hidden by default) -->
                        <div class="studio-info-card d-none" id="studioInfoCard">
                            <div class="info-row">
                                <div class="info-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="info-content flex-grow-1">
                                    <h6>Lokasi Studio</h6>
                                    <p id="studioLocation">-</p>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-icon">
                                    <i class="bi bi-info-circle-fill"></i>
                                </div>
                                <div class="info-content flex-grow-1">
                                    <h6>Deskripsi</h6>
                                    <p id="studioDescription">-</p>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="info-icon">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                                <div class="info-content flex-grow-1">
                                    <h6>Harga Per Jam</h6>
                                    <p id="studioPrice" class="fw-bold" style="color: #5B8DEE; font-size: 1.1rem;">-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Date & Time -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="bi bi-calendar-event"></i>
                            Tanggal & Waktu
                        </div>

                        <div class="mb-4">
                            <label for="booking_date" class="form-label">
                                <i class="bi bi-calendar3"></i>Tanggal Booking <span class="text-danger">*</span>
                            </label>
                            <input type="date" 
                                   name="booking_date" 
                                   id="booking_date" 
                                   class="form-control" 
                                   min="<?= date('Y-m-d', strtotime('+1 day')) ?>" 
                                   required>
                            <small class="text-muted">
                                <i class="bi bi-info-circle me-1"></i>Booking minimal H+1 dari hari ini
                            </small>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="start_time" class="form-label">
                                    <i class="bi bi-clock"></i>Waktu Mulai <span class="text-danger">*</span>
                                </label>
                                <select name="start_time" id="start_time" class="form-select" required>
                                    <option value="" selected disabled>-- Pilih Waktu Mulai --</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="end_time" class="form-label">
                                    <i class="bi bi-clock-fill"></i>Waktu Selesai <span class="text-danger">*</span>
                                </label>
                                <select name="end_time" id="end_time" class="form-select" required>
                                    <option value="" selected disabled>-- Pilih Waktu Selesai --</option>
                                </select>
                            </div>
                        </div>

                        <div class="alert alert-info mt-3 mb-0">
                            <i class="bi bi-lightbulb me-2"></i>
                            <strong>Info:</strong> Studio beroperasi dari jam 08.00 - 22.00. Pilih waktu yang sesuai dengan kebutuhan Anda.
                        </div>
                    </div>

                    <!-- Section 4: Total -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="bi bi-calculator"></i>
                            Ringkasan Pembayaran
                        </div>

                        <div class="total-section">
                            <div class="total-label">Total Biaya</div>
                            <div class="total-amount" id="totalDisplay">Rp 0</div>
                            
                            <div class="total-details">
                                <div class="detail-item">
                                    <div class="label">Durasi</div>
                                    <div class="value" id="durationDisplay">0 Jam</div>
                                </div>
                                <div class="detail-item">
                                    <div class="label">Harga/Jam</div>
                                    <div class="value" id="pricePerHourDisplay">Rp 0</div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="total_hidden" name="total">
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-submit" id="submitBtn" disabled>
                            <i class="bi bi-check-circle me-2"></i>Konfirmasi Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="text-center mt-4 text-white">
            <p style="font-size: 0.9rem; opacity: 0.9;">
                <i class="bi bi-shield-check me-2"></i>
                Data Anda aman dan terenkripsi
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Studio selection handler
        document.getElementById('studio_id').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const price = selectedOption.getAttribute('data-price');
            const location = selectedOption.getAttribute('data-location');
            const description = selectedOption.getAttribute('data-description');
            
            if (price) {
                // Show studio info card
                document.getElementById('studioInfoCard').classList.remove('d-none');
                document.getElementById('studioLocation').textContent = location || '-';
                document.getElementById('studioDescription').textContent = description || '-';
                document.getElementById('studioPrice').textContent = 'Rp ' + parseInt(price).toLocaleString('id-ID');
                
                // Update calculation
                calculateTotal();
            }
        });

        // Generate time slots
        function generateTimeSlots() {
            const startSelect = document.getElementById('start_time');
            const endSelect = document.getElementById('end_time');
            
            startSelect.innerHTML = '<option value="" selected disabled>-- Pilih Waktu Mulai --</option>';
            endSelect.innerHTML = '<option value="" selected disabled>-- Pilih Waktu Selesai --</option>';
            
            for (let hour = 8; hour <= 22; hour++) {
                const timeValue = hour.toString().padStart(2, '0') + ':00:00';
                const timeDisplay = hour.toString().padStart(2, '0') + ':00';
                
                startSelect.innerHTML += `<option value="${timeValue}">${timeDisplay}</option>`;
                endSelect.innerHTML += `<option value="${timeValue}">${timeDisplay}</option>`;
            }
        }

        // Calculate total
        function calculateTotal() {
            const studioSelect = document.getElementById('studio_id');
            const startTime = document.getElementById('start_time').value;
            const endTime = document.getElementById('end_time').value;
            const submitBtn = document.getElementById('submitBtn');
            
            if (!studioSelect.value || !startTime || !endTime) {
                document.getElementById('totalDisplay').textContent = 'Rp 0';
                document.getElementById('durationDisplay').textContent = '0 Jam';
                document.getElementById('pricePerHourDisplay').textContent = 'Rp 0';
                submitBtn.disabled = true;
                return;
            }
            
            const price = parseInt(studioSelect.options[studioSelect.selectedIndex].getAttribute('data-price'));
            const start = parseInt(startTime.split(':')[0]);
            const end = parseInt(endTime.split(':')[0]);
            const duration = end - start;
            
            if (duration <= 0) {
                alert('Waktu selesai harus lebih besar dari waktu mulai!');
                document.getElementById('end_time').value = '';
                return;
            }
            
            const total = price * duration;
            
            document.getElementById('totalDisplay').textContent = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('durationDisplay').textContent = duration + ' Jam';
            document.getElementById('pricePerHourDisplay').textContent = 'Rp ' + price.toLocaleString('id-ID');
            document.getElementById('total_hidden').value = total;
            
            submitBtn.disabled = false;
        }

        // Event listeners
        document.getElementById('start_time').addEventListener('change', calculateTotal);
        document.getElementById('end_time').addEventListener('change', calculateTotal);

        // Initialize
        generateTimeSlots();

        // Form validation
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            const total = document.getElementById('total_hidden').value;
            if (!total || total == 0) {
                e.preventDefault();
                alert('Mohon lengkapi semua data booking!');
            }
        });
    </script>
</body>
</html>
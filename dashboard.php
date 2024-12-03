<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Rumah Sakit</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <style>
      /* Body dan Container Utama */
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(
          to bottom,
          #e8f8ff,
          #ffffff
        ); /* Gradient yang lembut */
        color: #333;
      }

      .container {
        display: flex;
        height: 100vh; /* Tinggi penuh layar */
        overflow: hidden;
      }

      /* Sidebar */
      .sidebar {
        width: 250px;
        background: #004d99; /* Warna biru gelap yang serasi */
        color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Efek bayangan */
      }

      .sidebar h2 {
        font-size: 20px;
        margin-bottom: 20px;
        text-align: center;
        color: #ffffff;
      }

      .sidebar-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 100%;
      }

      .sidebar button {
        width: 100%;
        background: #0056b3;
        color: white;
        border: none;
        padding: 12px 20px;
        text-align: left;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s ease;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .sidebar button i {
        font-size: 18px;
      }

      .sidebar button:hover {
        background: #007bff; /* Warna lebih cerah */
        transform: translateX(5px); /* Sedikit geser */
      }

      /* Main Content */
      .main-content {
        flex-grow: 1;
        padding: 20px;
        overflow-y: auto;
        background: #f9fbfd; /* Warna abu lembut untuk kontras */
      }

      header h1 {
        color: #004d99;
        font-size: 28px;
        margin-bottom: 10px;
      }

      header p {
        color: #555;
        margin-bottom: 20px;
      }

      /* Highlight Section */
      .highlight {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        background: #ffffff;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .highlight-image {
        width: 40%;
        border-radius: 15px;
        border: 3px solid #e0e0e0; /* Tambahkan border */
      }

      .highlight-text {
        max-width: 50%;
        text-align: left;
      }

      .highlight-text h2 {
        color: #004d99;
        margin-bottom: 10px;
        font-size: 24px;
      }

      .highlight-text p {
        color: #555;
        line-height: 1.6;
        margin-bottom: 15px;
      }

      .highlight-text button {
        background-color: #0056b3;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .highlight-text button:hover {
        background-color: #007bff;
      }

      /* Card Section */
      .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
      }

      .card {
        background: white;
        border-radius: 15px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 300px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.2);
      }

      .card-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
      }

      .card h3 {
        color: #004d99;
        margin-bottom: 10px;
      }

      .card p {
        color: #555;
        font-size: 14px;
        line-height: 1.5;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <h2><i class="fas fa-hospital"></i> Rumah Sakit</h2>
        <div class="sidebar-buttons">
          <button onclick="window.location.href='home.html'">
            <i class="fas fa-home"></i> Home
          </button>
          <button onclick="window.location.href='layanan.html'">
            <i class="fas fa-stethoscope"></i> Layanan
          </button>
          <button onclick="window.location.href='dokter.html'">
            <i class="fas fa-user-md"></i> Dokter
          </button>
          <button onclick="window.location.href='fasilitas.html'">
            <i class="fas fa-hospital-user"></i> Fasilitas
          </button>
          <button onclick="window.location.href='kontak.html'">
            <i class="fas fa-phone"></i> Kontak
          </button>
          <button onclick="window.location.href='logout.html'">
            <i class="fas fa-sign-out-alt"></i> Logout
          </button>
        </div>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <header>
          <h1>Selamat Datang di Rumah Sakit</h1>
          <p>Memberikan pelayanan kesehatan terbaik untuk Anda</p>
        </header>
        <section class="highlight">
          <img
            src="Konstruksi-miniatur-Rumah-Sakit.jpg"
            alt="Rumah Sakit"
            class="highlight-image"
          />
          <div class="highlight-text">
            <h2>Kesehatan Anda Prioritas Kami</h2>
            <p>
              Rumah Sakit kami menyediakan layanan terbaik dengan fasilitas
              modern dan tenaga medis profesional. Kami selalu berkomitmen untuk
              memberikan pelayanan yang ramah dan cepat bagi seluruh pasien.
            </p>
            <button onclick="window.location.href='layanan.html'">
              Lihat Layanan Kami
            </button>
          </div>
        </section>
        <section class="card-container">
          <div class="card">
            <img src="rs mata.jpg" alt="Poliklinik Mata" class="card-image" />
            <h3>Poliklinik Mata</h3>
            <p>
              Dokter spesialis mata untuk menjaga kesehatan penglihatan Anda.
            </p>
          </div>
          <div class="card">
            <img
              src="poli umum.jpg"
              alt="Poliklinik Umum"
              class="card-image"
            />
            <h3>Poliklinik Umum</h3>
            <p>Pelayanan kesehatan umum yang ramah dan profesional.</p>
          </div>
          <div class="card">
            <img
              src="poli anak.jpg"
              alt="Poliklinik Anak"
              class="card-image"
            />
            <h3>Poliklinik Anak</h3>
            <p>Perawatan khusus untuk kesehatan buah hati Anda.</p>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>

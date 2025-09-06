<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kerupuk Opak Sadomas</title>
  <meta name="description" content="Kerupuk Opak Sadomas – Gurih, Renyah, Tradisional. UMKM unggulan Desa Sadomas, Rajagaluh, Majalengka."/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#FFF2C9;
      --bg-soft:#FFE9A9;
      --text:#0E3A2C;
      --text-soft:#2F5C48; 
      --accent:#0F6B45;
      --accent-2:#0A4C31; 
      --ring:#E7C979;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0}
    body{
      font-family:'Plus Jakarta Sans', system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
      background:linear-gradient(180deg,var(--bg) 0%, #FFF9E6 100%);
      color:var(--text);
      line-height:1.6;
    }
    .container{width:min(1120px, 92%); margin-inline:auto}
    .nav{position:sticky; top:0; z-index:40; backdrop-filter:saturate(180%) blur(10px); background-color:rgba(255,242,201,.75); border-bottom:1px solid var(--ring)}
    .nav__inner{display:flex; align-items:center; justify-content:space-between; padding:14px 0}
    .brand{font-weight:800; letter-spacing:.5px}
    .brand b{color:var(--accent)}
    .nav a{color:var(--text); text-decoration:none; font-weight:600; margin-left:22px}

    .hero{display:grid; grid-template-columns:1.1fr .9fr; gap:42px; align-items:center; padding:56px 0}
    .badge{display:inline-block; font-weight:700; letter-spacing:.6px; background:#fff; border:1px solid var(--ring); padding:6px 12px; border-radius:999px; color:var(--text-soft)}
    h1{font-size: clamp(32px, 5vw, 56px); line-height:1.1; margin:10px 0 8px; font-weight:800; letter-spacing:.4px}
    .tagline{font-size: clamp(16px, 2.2vw, 22px); color:var(--text-soft); font-weight:600}
    .lead{margin:20px 0 28px; font-size:clamp(15px, 1.6vw, 18px)}
    .cta{display:inline-flex; align-items:center; gap:10px; background:var(--accent); color:#fff; border:none; border-radius:999px; padding:14px 22px; font-weight:800; text-decoration:none; box-shadow:0 8px 16px rgba(15,107,69,.22)}
    .cta:hover{background:var(--accent-2)}

    .card{
      background:#fff; border:1px solid var(--ring); border-radius:18px; overflow:hidden; box-shadow:0 8px 20px rgba(14,58,44,.06)
    }
    .card--soft{background:var(--bg-soft)}
    .photo{aspect-ratio: 4/3; width:100%; object-fit:cover; display:block}

    .section{padding:56px 0}
    .section h2{font-size: clamp(24px, 3.8vw, 36px); margin:0 0 8px; font-weight:800}
    .muted{color:var(--text-soft)}

    .grid{display:grid; gap:22px}
    .grid-2{grid-template-columns:repeat(2,1fr)}
    .grid-3{grid-template-columns:repeat(3,1fr)}

    .list{margin:0; padding-left:18px}
    .list li{margin:6px 0}

    .features{display:grid; grid-template-columns:repeat(3,1fr); gap:16px; margin-top:18px}
    .feature{background:#fff; border:1px solid var(--ring); border-radius:14px; padding:14px; font-weight:700; text-align:center}

    .about{background:#fff; border:1px solid var(--ring); border-radius:18px; padding:24px}

    .footer{margin-top:42px; border-top:1px solid var(--ring); padding:22px 0; font-size:14px; color:#3e6b58}

    /* responsive */
    @media (max-width: 900px){
      .hero{grid-template-columns:1fr; padding:34px 0}
      .features{grid-template-columns:1fr}
      .grid-2{grid-template-columns:1fr}
      .grid-3{grid-template-columns:1fr}
    }
  </style>
</head>
<body>
  <!-- NAV -->
  <header class="nav">
    <div class="container nav__inner">
      <div class="brand">Kerupuk Opak <b>Sadomas</b></div>
      <nav>
        <a href="#tentang">Tentang</a>
        <a href="#pesan">Pesan</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="container hero">
    <div>
      <span class="badge">UMKM Desa Sadomas</span>
      <h1>KERUPUK OPAK SADOMAS</h1>
      <p class="tagline">Gurih, Renyah, Tradisional!</p>
      <p class="lead">Selamat datang di UMKM Kerupuk Opak Sadomas, produk unggulan desa kami yang dibuat dari bahan pilihan berkualitas. Diproduksi secara tradisional namun higienis – cocok untuk camilan maupun pelengkap makanan.</p>
      <a id="pesan" class="cta" href="https://wa.me/6281235495774?text=Halo%20saya%20ingin%20pesan%20Kerupuk%20Opak%20Sadomas" target="_blank" rel="noopener">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M20.52 3.48A11.89 11.89 0 0 0 2.06 16.2L1 21.75l5.69-1.04a11.9 11.9 0 0 0 5.7 1.46h.01c6.56 0 11.89-5.34 11.89-11.9 0-3.18-1.24-6.17-3.77-7.79Z" stroke="#fff" stroke-width="2"/><path d="M16.9 13.77c-.22.63-1.1 1.16-1.53 1.2-.41.04-.95.06-1.54-.09-.35-.09-.8-.27-1.38-.53a9.77 9.77 0 0 1-3.4-3.02 3.8 3.8 0 0 1-.82-2.04c.02-.86.47-1.7 1.03-1.9.26-.1.58-.05.75.15.19.24.43.61.54.86.18.38.14.56.03.77-.12.23-.25.37-.38.58-.11.16-.24.33-.1.62.14.3.61 1.24 1.43 2.01.99.96 1.83 1.28 2.14 1.42.3.14.47.12.64-.07.17-.2.73-.86.93-1.16.2-.3.4-.25.66-.15.26.1 1.65.78 1.94.95.28.17.47.27.54.42.07.14.07.59-.02.89Z" fill="#fff"/></svg>
        Pesan Sekarang
      </a>
      <div class="features">
        <div class="feature">Tanpa Pengawet</div>
        <div class="feature">Bahan Pilihan</div>
        <div class="feature">Dijamin Renyah</div>
      </div>
    </div>

    <div class="card card--soft">
      <!-- Ganti src dengan foto produk Anda -->
      <img class="photo" src="{{ asset('images/awal.png') }}" alt="Kerupuk Opak Sadomas"/>
    </div>
  </section>

  <!-- TENTANG KAMI -->
  <section id="tentang" class="section">
    <div class="container grid grid-2">
      <div class="about">
        <h2>TENTANG KAMI</h2>
        <p class="muted">UMKM Kerupuk Opak di Desa Sadomas, Rajagaluh, Majalengka. Produk kami merupakan hasil olahan warga desa yang tetap menjaga cita rasa khas opak tradisional.</p>
        <p>Kami memadukan resep turun-temurun dengan proses produksi yang higienis agar aman dikonsumsi seluruh keluarga.</p>
      </div>
      <div class="card">
        <img class="photo" src="{{ asset('images/2.jpg') }}" alt="Proses produksi kerupuk opak"/>
      </div>
    </div>
  </section>

  <!-- CTA AKHIR -->
  <section class="section">
    <div class="container card" style="padding:24px; text-align:center">
      <h2>Siap Coba Kerupuk Opak Paling Renyah?</h2>
      <p class="muted">Klik tombol di bawah untuk pemesanan via WhatsApp. Tersedia kemasan ecer & grosir.</p>
      <a class="cta" href="https://wa.me/6281235495774?text=Halo%20saya%20ingin%20pesan%20Kerupuk%20Opak%20Sadomas" target="_blank" rel="noopener">Pesan via WhatsApp</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div><strong>UMKM Kerupuk Opak Sadomas</strong></div>
      <div class="muted">Desa Sadomas, Rajagaluh, Majalengka • Instagram: @kerupukopak.sadomas • Telp/WA: 081235495774</div>
    </div>
  </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sinau Website</title>
  <style>
    /* Reset dasar */
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      background: #f5f7fa;
      color: #333;
    }

    /* Navigasi */
    nav {
      background: #c8102e;
      padding: 15px 20px;
      display: flex;
      gap: 20px;
      justify-content: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      transition: color 0.3s;
    }
    nav a:hover { color: #ffd700; }

    /* Judul */
    .gambar > p {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin: 25px 0 15px;
      color: #c8102e;
    }
    .gambar > b {
      display: block;
      font-size: 1rem;
      text-align: justify;
      line-height: 1.8;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      max-width: 900px;
      margin: 0 auto 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .gambar img {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 0 auto 20px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    }

    /* Pemain */
    .pemain { margin: 50px auto; max-width: 1200px; padding: 0 20px; }
    .pemain h2 {
      text-align: center;
      font-size: 2rem;
      color: #c8102e;
      margin-bottom: 30px;
    }
    .daftar-pemain {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 25px;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      opacity: 0;
      transform: translateY(30px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card.show { opacity: 1; transform: translateY(0); transition: all 0.6s ease-in-out; }
    .card:hover { transform: translateY(-8px); box-shadow: 0 6px 16px rgba(0,0,0,0.2); }
    .card img { width: 100%; height: 220px; object-fit: cover; }
    .card h3 { padding: 12px; background: #f9f9f9; }
    .card button {
      width: 100%;
      border: none;
      padding: 10px;
      background: #c8102e;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }
    .card button:hover { background: #a50e25; }

    /* Modal */
    .modal {
      display: none; 
      position: fixed;
      z-index: 2000;
      left: 0; top: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: #fff;
      border-radius: 12px;
      max-width: 500px;
      width: 90%;
      padding: 20px;
      position: relative;
      animation: fadeIn 0.4s;
    }
    .modal-content img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .modal-content h3 { margin-bottom: 10px; color: #c8102e; }
    .modal-content p { font-size: 0.95rem; line-height: 1.6; }
    .close {
      position: absolute;
      top: 10px; right: 15px;
      font-size: 1.5rem;
      cursor: pointer;
      color: #333;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <nav>
    <a href="#home">Home</a>
    <a href="#daftar-pemain">Daftar Pemain</a>
  </nav>
  
  <div class="gambar" id="home">
    <p>Sejarah Club Sepak Bola Liverpool</p>
    <b>
      Sejarah Liverpool Football Club dimulai pada 1892 setelah perselisihan antara Everton FC dan John Houlding, pemilik Stadion Anfield, yang menyebabkan Everton pindah dan Houlding mendirikan klub baru untuk bermain di stadion tersebut. Setelah beberapa tahun yang sukses, klub ini meraih gelar liga pertamanya pada musim 1900-1901.
    </b>
    <img src="gambar/liverpool11.png" alt="Liverpool">
  </div>

  <!-- Daftar Pemain -->
  <section class="pemain" id="daftar-pemain">
    <h2>Daftar Pemain Liverpool</h2>
    <div class="daftar-pemain">
      <div class="card">
        <img src="gambar/moh salah.jpg" alt="Mohamed Salah">
        <h3>Mohamed Salah</h3>
        <button onclick="openModal('Mohamed Salah','gambar/moh salah.jpg','Penyerang sayap asal Mesir, dikenal dengan kecepatan dan ketajamannya di depan gawang.')">Lihat Detail</button>
      </div>
      <div class="card">
        <img src="gambar/vvd.jpg" alt="Virgil van Dijk">
        <h3>Virgil van Dijk</h3>
        <button onclick="openModal('Virgil van Dijk','gambar/vvd.jpg','Kapten Liverpool, bek tengah tangguh asal Belanda dengan kepemimpinan yang kuat.')">Lihat Detail</button>
      </div>
      <div class="card">
        <img src="gambar/ab1.jpg" alt="Alisson Becker">
        <h3>Alisson Becker</h3>
        <button onclick="openModal('Alisson Becker','gambar/ab1.jpg','Kiper asal Brasil, salah satu penjaga gawang terbaik dunia dengan refleks luar biasa.')">Lihat Detail</button>
      </div>
      <div class="card">
        <img src="gambar/hg3.png" alt="Hugo Ekitike">
        <h3>Hugo Ekitike</h3>
        <button onclick="openModal('Hugo Ekitike','gambar/hg3.png','Striker muda berbakat dengan potensi besar dalam mencetak gol.')">Lihat Detail</button>
      </div>
      <div class="card">
        <img src="gambar/ds1.jpg" alt="Dominik Szoboszlai">
        <h3>Dominik Szoboszlai</h3>
        <button onclick="openModal('Dominik Szoboszlai','gambar/ds1.jpg','Gelandang serang asal Hungaria, terkenal dengan visi bermain dan tendangan jarak jauhnya.')">Lihat Detail</button>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="playerModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <img id="modalImg" src="" alt="">
      <h3 id="modalName"></h3>
      <p id="modalDesc"></p>
    </div>
  </div>

  <script>
    // animasi scroll
    const cards = document.querySelectorAll('.card');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, { threshold: 0.2 });
    cards.forEach(card => observer.observe(card));

    // modal function
    function openModal(name, imgSrc, desc) {
      document.getElementById('modalName').textContent = name;
      document.getElementById('modalImg').src = imgSrc;
      document.getElementById('modalDesc').textContent = desc;
      document.getElementById('playerModal').style.display = 'flex';
    }
    function closeModal() {
      document.getElementById('playerModal').style.display = 'none';
    }
    // close modal jika klik luar area
    window.onclick = function(event) {
      const modal = document.getElementById('playerModal');
      if (event.target === modal) {
        closeModal();
      }
    }
  </script>

</body>
</html>

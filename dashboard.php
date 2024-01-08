<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "ecommerce"; 

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */ 
$password = ""; 

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "<h1>Yes! Koneksi Berhasil..</h1>";
}
/* menutup koneksi */
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAYU STORE</title>
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">BAYU STORE</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#chefs">Product</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="index.php">Log Out</a></li>           

        </ul>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h3>Lebih Banyak, Lebih Cepat</h3>
            <h1>Selalu Menetes <br />Jangan Pernah Melambat<br />Dengan <span>Nike</span></h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rerum minus ut facere quas labore earum sed ad minima. Alias ex dolorem corrupti earum, quos, libero illum, architecto ratione quis repudiandae eum rerum ut veniam vitae. Doloribus similique fugit assumenda vero. Animi dolorem sapiente neque at consequatur impedit beatae possimus!
            <a href="product/dataproduct.php" class="btn" id="send">Add Produk</a>
        </div>
        <div class="home-img">
            <img src="img/shoes.png" alt="">
        </div>
    </section>
     <!--=========== ABOUT =============-->
     <section class="about section bd-container" id="about">
        <div class="about_container bd-grid">
            <div class="about_data">
                <span class="section-subtitle about_initial">About Us</span>
                <h2 class="section-title about_intial">Selalu Tampil Segar <br> Bersama Nike</h2>
                <p class="about_description">Segalanya menjadi lebih baik sebagai Anggota Nike.
                    Jadilah yang pertama mendapatkan akses eksklusif ke gaya dan inovasi terbaru, pengiriman gratis, hadiah ulang tahun, dan banyak lagi.
                </p>
                <a href="#" class="button">Baca selengkapnya</a>
            </div>
            <div class="about-image">
                <img src="img/shoe10.png" alt="" class="about_img">
            </div>
          
        </div>
    </section>
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <p>Menawarkan</p>
            <h2>Layanan Kami <br> Yang Luar Biasa</h2>
        </div>
        <div class="services-container">
            <div class="box">
                <img src="img/order.png" alt="">
                <h2>Dukungan Pelanggan yang Luar Biasa</h2>
                <p>Kami menawarkan klien kami layanan pelanggan yang sangat baik, kepuasan Anda adalah prioritas kami</p>
            </div>
            <div class="box">
                <img src="img/ship.png" alt="">
                <h2>Sepatu Terbaru</h2>
                <p>Kami menyediakan sepatu nike terbaik dan terbaru kepada klien kami. Selalu tampil segar dengan Nike.</p>
            </div>
            <div class="box">
                <img src="img/deliver.png" alt="">
                <h2>Pengiriman cepat</h2>
                <p>Kami menawarkan kepada klien kami layanan berkualitas tinggi selama bertahun-tahun, dengan sepatu terbaik dan terkini di pabrik</p>
            </div>
        </div>
    </section>
    <!-- Chef section -->
    <section class="chefs" id="chefs">
        <div class="heading">
            <p>Penawaran khusus</p>
            <h2>Penjualan terbaik</h2>
        </div>
        <div class="chefs-container">
            <div class="chef-box">
                <img src="img/shoe1.png" alt="">
                <div class="text">
                    <h2>Nike Air Force</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus.</p>
                    <a href="order.php?product=Produk1" class="btn">Beli Sekarang</a>
                    <span class="menu_price">Rp. 120.000</span>
                </div>
            </div>
            <div class="chef-box">
                <img src="img/shoe2.png" alt="">
                <div class="text">
                    <h2>Nike Air Robix</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus.</p>
                    <a href="order.php?product=Produk2" class="btn">Beli Sekarang</a>
                    <span class="menu_price">Rp. 120.000</span>
                </div>
            </div>
            <div class="chef-box">
                <img src="img/shoe3.png" alt="">
                <div class="text">
                    <h2>Nike Air Max</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus.</p>
                    <a href="order.php?product=Produk3" class="btn">Beli Sekarang</a>
                    <span class="menu_price">Rp. 120.000</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Copyright -->
    <section class="contact" id="contact">
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
        <p> @adnanbayu15</p>
    </section>



    <!-- Link To Js -->
        <script>
      feather.replace();
    </script>
    <script src="main.js"></script>
</body>

</html>

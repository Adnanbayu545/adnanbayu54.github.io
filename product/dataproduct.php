<?php
session_start();
include '../koneksi.php';
if(isset($_POST['namaproduct'])){
    $namaproduct = $_POST['namaproduct'];
    $deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok= $_POST['stok'];


$query = mysqli_query($conn, "INSERT INTO tbproduct (namaproduct, deskripsi, harga, stok) VALUES ('$namaproduct', '$deskripsi', '$harga', '$stok')");

if ($query) {
    echo '<script>alert("tambah produk berhasil"); location.href="../dashboard.php"</script>';
} else {
    echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
}


}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper">
        <div class="inner">
            <form  method="post">
                <h3>Produk</h3>
                <p>Penginputan nama produk di toko kami</p>
                <label class="form-group">
                    <input type="text" class="form-control" name="namaproduct" required>
                    <span>Nama Produk</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="text" class="form-control" name="deskripsi" required>
                    <span for="">Deskripsi</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="text" class="form-control" name="harga" required>
                    <span for="">Harga</span>
                    <span class="border"></span>
                </label>
                <label class="form-group">
                    <input type="text" class="form-control" name="stok" required>
                    <span for="">Stok</span>
                    <span class="border"></span>
                </label>
                <button type="submit">Submit 
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

</body>
</html>

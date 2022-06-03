<?php
include 'connection.php';
// set menjadi bahasa Indonesia
setlocale(LC_ALL, 'id-ID', 'id_ID');

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT nama FROM user");
$result=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Sukses Login</title>
</head>

<body>
    <!--bagian box formulir-->
    <section class="box-formulir">
        <h2>Selamat datang</h2>
        <div class="box">
            <h3><?php echo $result['nama'] ?> pada hari
                <!-- set hari dan tanggal -->
                <?php echo strftime("%A, %d %B %Y", strtotime('2020-10-05'))?>
            </h3>
            <div class="box-kecil">
                <th>
                <td></td>
                </th>
                <a href="form-guestbook.php">Input Guestbook</a>
                <a href="cetak_guestbook.php">Lihat Guestbook</a>
                <a href="form-logout.php">Logout</a>
            </div>
        </div>
    </section>
</body>

</html>
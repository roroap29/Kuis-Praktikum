<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Guestbook</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posted</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($koneksi, $sql);
            while ($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $result['id'] . "</td>";
                echo "<td>" . $result['posted'] . "</td>";
                echo "<td>" . $result['nama'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "<td>" . $result['alamat'] . "</td>";
                echo "<td>" . $result['city'] . "</td>";
                echo "<td>" . $result['pesan'] . "</td>";

                echo "<td>";
                echo "<a href='form_edit_guestbook.php?id=".$result['id']."'>Edit</a> | ";
                echo "<a href='hapus_guestbook.php?id=".$result['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
    <br>
    <a href="form-guestbook.php">Kembali</a>
</body>

</html>
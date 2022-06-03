<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Sign-Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=Mukta:wght@300&family=PT+Sans:ital@1&display=swap"
        rel="stylesheet">
    <style>
    h1 {
        color: black;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="box-formulir">
        <h1>Silahkan Masuk</h1>
        <form action="simpan_guestbook.php" method="POST">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Posted</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="posted" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" cols="22" rows="3" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="city" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>
                            <textarea name="pesan" cols="22" rows="5" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="masuk" class="btn-masuk" value="Masuk">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>


</body>

</html>
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
        <h1>Silahkan Daftar</h1>
        <form action="simpan_signup.php" method="POST">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" cols="22" rows="3" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Pribadi</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Homepage</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="homepage" class="input-control" p></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type=" text" name="username" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pass" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="daftar" class="btn-daftar" value="Daftar">
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    </form>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login</title>
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
        <form action="simpan_login.php" method="POST">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" class="input-control">
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
                            <input type="submit" name="masuk" class="btn-login" value="Masuk">
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    </form>


</body>

</html>
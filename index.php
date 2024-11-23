<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_GET['pesan'])){
            echo '<div class="notification">';
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! email dan password salah!";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses halaman admin";
            }
            echo '</div>';
        }
        ?>
        <form method="post" action="cek_login.php">
            <table>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" placeholder="Masukkan email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Masukkan password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="LOGIN">
                        <a href="daftar.php"><button type="button">DAFTAR</button></a>
                    </td>
                </tr>
            </table>            
        </form>
    </div>
</body>
</html>
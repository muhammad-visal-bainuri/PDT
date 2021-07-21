<html>
    <body>
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:../home.php?pesan=belum_login");
            }
        ?>
        <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
        <br/>
        <a href="">LOGOUT</a>
    </body>
</html>
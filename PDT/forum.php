<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bimbel SMP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="background">
         -->
        <div class="nav">
            <img src="assets/logo.png" class="logo-profile">
    
            <ul>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="grade.html">Grade</a></li>
                <li><a href="#">Profile <i class="fas fa-caret-down"></i></a>
                
                    <div class="dropdown">
                        <ul>
                            <li><a href="home.html">Log out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <br><br>
        
    <form action="" method="POST" class="box">
        <label> Nama: 
            <input type="text" name="Name" class="Input" style="width: 225px" required>
        </label>
        <br><br>
        <label> Komentar: <br>
            <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
        </label>
        <br><br>
            <input type="submit" name="Submit" value="Submit Comment" class="Submit">
    </form>

 </body>

</html>


<?php
 
 if($_POST['Submit']){
  print "<h1>Komentar anda tersimpan</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get komentara sebelumnya
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete 
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read Komentar
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>


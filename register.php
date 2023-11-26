<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <title>Register</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<div id="full">
<p id="powrot" onclick="document.location='index.php'"><img src="strzałka.png" style="width:20px; margin-left: 20px;">  POWRÓT</p>
    <div class="center-position">
    <div id="obrazek">
<img src="setting.jfif" style= "border-radius: 50px; width:500px">
</div>
    <form action="" method="POST" enctype="multipart/form-data" >
    <input type="file" id="nkne" name="db_fot" placeholder="zdjecie">
        <input type="text" id="nkne" name="nkne" placeholder="Nick">
        <input type="text" id="email" name="email" placeholder="Email">
        <input type="text" id="pswd" name="pswd" placeholder="Hasło">
        <input type="submit" id="reg" value="Wpisz się">
      </form>
      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nick1 = $_POST["nkne"];
  $email1 = $_POST["email"];
  $haslo1 = $_POST["pswd"];

  if(isset($_FILES["db_fot"]) && $_FILES["db_fot"]["error"] == 0){
    $check = getimagesize($_FILES["db_fot"]["tmp_name"]);
    if($check !== false) {
      $image = $_FILES['db_fot']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));

      if(empty($nick1) || empty($email1) || empty($haslo1)) {
        echo "Wszystkie pola muszą być wypełnione!";
      } else {
        $wstaw = "INSERT INTO uzytkownik (nick, email, haslo, zdjecie) VALUES ('$nick1','$email1', '$haslo1', '$imgContent')";
        if ($conn->query($wstaw) === TRUE) {
          echo '<script type="text/javascript">alert("Brawo przyjacielu! Zostałeś częścią tego forum");
          window.location.href = "index.php";
          </script>';
        } else {
          echo "" . $wstaw . "<br>" . $conn->error;
        }
      }
    } else {
      echo "Proszę wybrać obraz do przesłania.";
    }
  } else {
    echo "Błąd przesyłania pliku.";
  }
}
$conn->close();
?>

    </div>
</div>
</body>
</html>
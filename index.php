<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>poszukiwacze dziada ufoluda</title>
    <link href="sttyl.css" rel="stylesheet">
    <link rel="icon" href="dziad1.png">
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




    <div id="calosc">
    <div id="naglowek">
        <div id="myBar" onclick="topFunction()" title="Do góry">Wróć do góry</div>
        <!--Pasek--> 
        <script>

            var mybar = document.getElementById("myBar");
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybar.style.display = "block";
              } else {
                mybar.style.display = "none";
              }
            }
            function topFunction() {
              document.documentElement.scrollTop = 0; 
            }
            
                        </script>


     <a href="index.php"><img src="logo.png" alt="logo" style="width: 70px; margin: 20%;"></a>
    <input id="searchbar"  type="text" placeholder="  🔎 Wyszukaj wątek">
    <button type="button" id="logowanie" onclick="logowanko()" >Zaloguj się</button>
    </div>


    <script>
      function logowanko() {
        var logowanie = document.getElementById('logowaniepaleta');
        if (logowanie.style.display === "block") {
          logowanie.style.display = "none";
        } else {
          logowanie.style.display = "block";
        }
        
      }
  </script>



    
    <div class="polelisty">
    <div id="lista">
    <p id="wlista_pierwszy" onclick="document.location='index.php'" ><img  id="house" src="domek.png" style="width: 50px; margin-right: 20px;margin-left: 60px;">   Strona główna</p><br>
    <p id="wlista" onclick="lista1()" ><img src="ludzik.png" id="profile" style="width: 50px; margin-right: 20px;margin-left: 60px;">   Panel użytkownika</p><br>



  


<?php
if(isset($_GET['submit'])) {
  $nick1 = $_GET['nick'];
  $haslo1 = $_GET['haslo'];

  $cookie_name = "ciastko";
  $cookie_value = $nick1;
  $cookie_name1 = "ciastko_haslo";
  $cookie_value1 = $haslo1;
  setcookie($cookie_name1, $cookie_value1, time() + (120), "/");
  setcookie($cookie_name, $cookie_value, time() + (120), "/");


  $sql = "SELECT zdjecie, nick, email, haslo FROM uzytkownik where nick = '". $cookie_value . "' AND haslo='" .$cookie_value1. "' ";
  $result1 = $conn->query($sql);
  
  if ($result1->num_rows > 0) {
    echo "<table id='tabela_user' class='panel_user' style='display: none;'>";
    while($row = $result1->fetch_assoc()) {
      
      echo "<tr><td id='zdj'><img src='data:image/jpeg;base64,".base64_encode($row['zdjecie'])."'/></td></tr><tr><td id='nickname'>nick: " . $row["nick"]. "</td></tr><tr><td id='wpisy'>email: " . $row["email"]. "</td></tr><tr><td id='wpisy'>haslo: " . $row["haslo"]. "</td></tr><tr><td> <button type='button' id='update' onclick='update()' >Zmień dane</button> </td></tr>";
    }
    echo "</table>";
  }
}
?>





    <!--
    <form method="POST" action="" >
    <table id="tabela_user" class="panel_user">
      <tr>
        <input type="file" id="fotka" name="zdjecie" accept=".jpg,.png,.jpeg,.gif" style="display: none;" />
        <td><img id="fotka1" src="ludzik1.png" onclick="document.getElementById('fotka').click()"></td>
      </tr>
<tr>
      <td id="nickname">Nazwa użytkownika: </td>
</tr>
      <tr>
        <td id="wpisy" >Ilość postów: </td>
      </tr>
      <tr>
        <td id="wpisy">Ilośćkomentarzy: </td>
      </tr>
      <tr>
        <td id="wpisy">Ilość punktów: </td>
      </tr>
      <tr>
        <td id="wpisy">Zmień hasło: </td>
      </tr>
      <tr>
        <td id="wpisy"><button type="submit">wyslij</button></td>
      </tr>
      </table>

          -->
      
<script>
      function lista1() {
        var tabela = document.getElementById('tabela_user');
        if (tabela.style.display === "block") {
          tabela.style.display = "none";
        } else {
          tabela.style.display = "block";
        }
        
      }
  </script>


    <p id="wlista" onclick="lista()" ><img src="kolo.png" id="settings" style="width: 50px; margin-right: 20px;margin-left: 60px;">  Ustawienia</p>
<table id="tabela1" class="emotki">
  <tr>
    <th colspan="3" id="wpisy">Wybierz kursor</th>
  </tr>
  <tr>
    <td onclick="kursor1()"><img src="deafult.cur" alt="kursor"></td>
    <td onclick="kursor2()"><img src="kursor.cur" alt="kursor"></td>
    <td onclick="kursor3()"><img src="Normal.cur" alt="kursor"></td>
  </tr>
  <tr>
    <td onclick="kursor4()"><img src="rainbow normal select.cur" alt="kursor"></td>
    <td onclick="kursor5()"><img src="blue owl normal select.cur" alt="kursor"></td>
    <td onclick="kursor6()"><img src="bart simpson skull normal select.cur" alt="kursor"></td>
  </tr>
  <tr>
    <td onclick="kursor7()"><img src="watermelon normal select.cur" alt="kursor"></td>
    <td onclick="kursor8()"><img src="Jawa 3 normal select.cur" alt="kursor"></td>
    <td onclick="kursor9()"><img src="Light Saber 1 normal select.cur" alt="kursor"></td>
  </tr>

  <!-- otwieranie listy -->
  <script>
      function lista() {
        var list1 = document.getElementById('tabela1');
        var list2 = document.getElementById('tabela2');
        var list3 = document.getElementById('tabela3');
        if (list1.style.display === "block") {
          list1.style.display = "none";
        } else {
          list1.style.display = "block";
        }
        if (list2.style.display === "block") {
          list2.style.display = "none";
        } else {
          list2.style.display = "block";
        }
        if (list3.style.display === "block") {
          list3.style.display = "none";
        } else {
          list3.style.display = "block";
        }
      }
  </script>

<!-- zmiana kursora -->
<script>
function kursor1() {
           document.body.style.cursor = "default", auto;
        }
        function kursor2() {
           document.body.style.cursor = "url('kursor.cur'), auto";
        }
        function kursor3() {
           document.body.style.cursor = "url('Normal.cur'), auto";
        }
        function kursor4() {
           document.body.style.cursor = "url('rainbow normal select.cur'), auto";
        }
        function kursor5() {
           document.body.style.cursor = "url('blue owl normal select.cur'), auto";
        }
        function kursor6() {
           document.body.style.cursor = "url('bart simpson skull normal select.cur'), auto";
        }
        function kursor7() {
           document.body.style.cursor = "url('watermelon normal select.cur'), auto";
        }
        function kursor8() {
           document.body.style.cursor = "url('Jawa 3 normal select.cur'), auto";
        }
        function kursor9() {
           document.body.style.cursor = "url('Light Saber 1 normal select.cur'), auto";
        }


</script>

  <table id="tabela2" class="emotki">
    <tr>
      <th colspan="3" id="wpisy">Wybierz kolor tła</th>
    </tr>
    <tr>
      <td onclick="kolor1()"><img src="kolor1.png" alt="kolor"></td>
      <td onclick="kolor2()"><img src="kolor2.png" alt="kolor"></td>
      <td onclick="kolor3()"><img src="kolor3.png" alt="kolor"></td>
    </tr>
    <tr>
      <td onclick="kolor4()"><img src="kolor4.png" alt="kolor"></td>
      <td onclick="kolor5()"><img src="kolor5.png" alt="kolor"></td>
      <td onclick="kolor6()"><img src="kolor6.png" alt="kolor"></td>
    </tr>
    <tr>
      <td onclick="kolor7()"><img src="kolor7.png" alt="kolor"></td>
      <td onclick="kolor8()"><img src="kolor8.png" alt="kolor"></td>
      <td onclick="kolor9()"><img src="kolor9.png" alt="kolor"></td>
    </tr>
  </table>

  <table id="tabela3" class="emotki">
    <tr>
      <th colspan="3" id="wpisy">Wybierz kolor napisów</th>
    </tr>
    <tr>
      <td onclick="napis1()"><img src="kolor1.png" alt="kolor"></td>
      <td onclick="napis2()"><img src="kolor2.png" alt="kolor"></td>
      <td onclick="napis3()"><img src="kolor3.png" alt="kolor"></td>
    </tr>
    <tr>
      <td onclick="napis4()"><img src="kolor4.png" alt="kolor"></td>
      <td onclick="napis5()"><img src="kolor5.png" alt="kolor"></td>
      <td onclick="napis6()"><img src="kolor6.png" alt="kolor"></td>
    </tr>
    <tr>
      <td onclick="napis7()"><img src="kolor7.png" alt="kolor"></td>
      <td onclick="napis8()"><img src="kolor8.png" alt="kolor"></td>
      <td onclick="napis9()"><img src="kolor9.png" alt="kolor"></td>
    </tr>
  </table>
 

    <br>
    <p id="wlista"><img src="hasztag.png" id="hasz" style="width: 50px;margin-right: 20px;margin-left: 60px;"> Wątki</p><br>
    

</div></div><div class="srodek"><form action="" method="POST" >
<input type="file" id="zdjecie" name="fot" accept=".jpg,.png,.jpeg,.gif" style="display: none;" />

<input type="file" id="glosowka" name="mp3" accept=".mp3" style="display: none;" />

<div id="create">
  
<?php 
  if(isset($_COOKIE['ciastko']) && isset($_COOKIE['ciastko_haslo'])) {
    $cookie_value = $_COOKIE['ciastko'];
    $cookie_value1 = $_COOKIE['ciastko_haslo'];

    $sql = "SELECT zdjecie FROM uzytkownik where nick = '". $cookie_value . "' AND haslo='" .$cookie_value1. "' ";
    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) {
            echo "<img id='profilowe' src='data:image/jpeg;base64,".base64_encode($row['zdjecie'])."' style='width: 75px;margin-right: 10px;'/>";
        }
    }
} else {
    echo "<img id='profilowe' src='ludzik1.png' onclick='zmiana()' style='width: 75px;margin-right: 10px;'>";
}
if(isset($_GET['submit'])) {
  $nick1 = $_GET['nick'];
  $haslo1 = $_GET['haslo'];
}
?>

  <script>

  var zdjecia = ['ludzik1.png', 'ludzik2.png', 'ludzik3.png', 'ludzik4.png', 'ludzik5.png', 'ludzik6.png', 'ludzik7.png', 'ludzik8.png', 'ludzik9.png'];
  var aktualne = 0;

  function zmiana(){
aktualne = (aktualne + 1) % zdjecia.length;
document.getElementById('profilowe').src = zdjecia[aktualne];

  }
  </script>

  <textarea name="wpis" id="pole" maxlength="200" cols="50" rows="2" oninput="powiekszenie(this)" placeholder="Wyraź swoją opinię ..."></textarea></br>

    <div id="przyciski"> 
      


      <button type="submit" id="watek">wyslij</button>

      <button type="button" id="fota" onclick="document.getElementById('zdjecie').click()">zdjęcie</button>

<button type="button" id="glos" onclick="document.getElementById('glosowka').click()" >głosówka</button>
      
      </div>

  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tresc = $_POST["wpis"];
  
  if(isset($_COOKIE['ciastko']) && isset($_COOKIE['ciastko_haslo'])) {
    $username = $_COOKIE['ciastko'];
    $password = $_COOKIE['ciastko_haslo'];

    $result = $conn->query("SELECT id,zdjecie,nick FROM uzytkownik WHERE nick='$username' AND haslo='$password'");
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $userId = $row['id'];
      $userfoto = $row['zdjecie'];
      $usernick = $row['nick'];
    } else {
      echo "uzytkownik nie istnieje.";
      $userId = 0;
      $userfoto = '';
      $usernick = '';
    }
  } else {
    $userId = 0;
    $userfoto = '';
    $usernick = '';
  }

  $stmt = $conn->prepare("INSERT INTO posty (tresc,id_user,zdjecie,user) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("siss", $tresc, $userId, $userfoto, $usernick);

  if ($stmt->execute()) {
    echo "<p id='wpisy' style='margin-top: 50px';'margin-bottom:0'>Wpis został dodany pomyślnie.</p>";
  } else {
    echo "Error: " . $stmt->error;
  }
}
  //$fileContent = '';
 // if(isset($_FILES['mp3']) && $_FILES['mp3']['tmp_name'] != ''){
   // $file = $_FILES['mp3']['tmp_name'];
   // $fileContent = addslashes(file_get_contents($file));
 // }

 // $imgContent1 = '';
  //if(isset($_FILES["fot"]) && $_FILES["fot"]["error"] == 0){
  //  $check = getimagesize($_FILES["fot"]["tmp_name"]);
   // if($check !== false) {
    //  $image = $_FILES['fot']['tmp_name'];
    //  $imgContent1 = addslashes(file_get_contents($image));
    //}
 // }

 // $stmt = $conn->prepare("INSERT INTO posty (tresc,id_user,zdjecie,fotografia,glosowka) VALUES (?, ?, ?, ?, ?)");
//$stmt->bind_param("sisss", $tresc, $userId, $userfoto, $imgContent1, $fileContent);

//if ($stmt->execute()) {
  //echo "<p id='wpisy' style='margin-top: 50px';'margin-bottom:0'>Wpis został dodany pomyślnie.</p>";
//} else {
 // echo "Błąd: " . $stmt->error;
//}
//}


?>



<script>
function powiekszenie(textarea) {
  textarea.style.height = 'auto';
  textarea.style.height = textarea.scrollHeight + 'px';
}
</script>
</div>

<div id="bloczki">
<div id="logowaniepaleta">
<form action="" method="GET">
  <p id="wpisy" >Wpisz się tutaj:</p>
        <input type="text" id="nkne" name="nick" placeholder="Nickname:">
        <input type="password" id="pswd" name="haslo" placeholder="Hasło:">
        <input type="submit" id="log" name="submit"  value="Zaloguj">
        </form>
        <p style="text-align: center;">Nie masz konta?<a onclick="document.location='register.php'" style="cursor: pointer; color:blue"> Załóż konto</a></p>
   
</div>
<div id="zmianadiv" style="display:none">
<form action="" method="POST">
  <p id="wpisy" >Zmień dane tutaj:</p>
        <input type="text" id="nkne" name="db_nick" placeholder="Nickname:">
        <input type="password" id="pswd" name="db_haslo" placeholder="Hasło:">
        <input type="submit" id="log" name="db_submit"  value="Zmień">
        </form>
</div>
<?php
if(isset($_POST['db_submit'])) {
  $nick1 = $_POST['db_nick'];
  $haslo1 = $_POST['db_haslo'];


  $sql = "UPDATE uzytkownik SET nick='".$nick1."', haslo='".$haslo1."' where nick = '". $cookie_value . "' AND haslo='" .$cookie_value1. "' ";

  if ($conn->query($sql) === TRUE) {
    echo "Dane zostały zaaktualizowane";
  } else {
    echo "Błąd: " . $conn->error;
  }
}
?>


</script>
<script>
      function update() {
        var tabela = document.getElementById('zmianadiv');
        if (tabela.style.display === "block") {
          tabela.style.display = "none";
        } else {
          tabela.style.display = "block";
        }
        
      }
  </script>
</div>

        <div id="glowna">
        <?php

$wyswietlenie = "SELECT tresc,zdjecie,user from posty order by id DESC";

$rezultat = $conn->query($wyswietlenie);
  
if ($rezultat->num_rows > 0) {
  while($row = $rezultat->fetch_assoc()) {
    echo "<div id='tresciout' style='display: flex; flex-direction: column; align-items: center; justify-content: center;'>"; 
    echo "<div style='align-self: flex-start; display: flex; align-items: center;'>";
    if($row['zdjecie'] != '') {
      echo "<img src='data:image/jpeg;base64,".base64_encode($row['zdjecie'])."' style='width: 10%; margin: 20px;'/>";
      echo "<p id='wpisy' style='margin: 20px;'>".$row['user']."</p><br>";
    } else {
      echo "Gość";
    }
    echo "</div>";
    echo "<p id='wpisy' style='display:block'>".$row['tresc']."</p><br>";
    echo "</div>";
  }
}
?>

        </div>
    </div>
    </div>
<!-- kolory dla napisów -->
    <script>
      function napis1() {
        document.getElementById("naglowek").style.color = "#1d1d1d";
        document.getElementById("wpisy").style.color = "#1d1d1d";
                document.getElementById("create").style.color = "#2e2d2d";
                document.getElementById("glowna").style.color = "#1d1d1d";
                document.getElementById("myBar").style.color = "#1d1d1d";
                document.getElementById("searchbar").style.color = "#1d1d1d";
                document.getElementById("lista").style.color = "#1d1d1d";
                document.getElementById("pole").style.color = "#1d1d1d";
       var zdjecie = document.getElementById('house');
       zdjecie.src = "domek1.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik1.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo1.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag1.png";
             }
             function napis2() {
        document.getElementById("naglowek").style.color = "yellow";
        document.getElementById("wpisy").style.color = "yellow";
                document.getElementById("create").style.color = "yellow";
                document.getElementById("glowna").style.color = "yellow";
                document.getElementById("myBar").style.color = "yellow";
                document.getElementById("searchbar").style.color = "yellow";
                document.getElementById("lista").style.color = "yellow";
                document.getElementById("pole").style.color = "yellow";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek2.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik2.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo2.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag2.png";
             }
             function napis3() {
        document.getElementById("naglowek").style.color = "green";
        document.getElementById("wpisy").style.color = "green";
                document.getElementById("create").style.color = "green";
                document.getElementById("glowna").style.color = "green";
                document.getElementById("myBar").style.color = "green";
                document.getElementById("searchbar").style.color = "green";
                document.getElementById("lista").style.color = "green";
                document.getElementById("pole").style.color = "green";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek3.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik3.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo3.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag3.png";
             }
             function napis4() {
        document.getElementById("naglowek").style.color = "red";
        document.getElementById("wpisy").style.color = "red";
                document.getElementById("create").style.color = "red";
                document.getElementById("glowna").style.color = "red";
                document.getElementById("myBar").style.color = "red";
                document.getElementById("searchbar").style.color = "red";
                document.getElementById("lista").style.color = "red";
                document.getElementById("pole").style.color = "red";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek4.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik4.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo4.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag4.png";
             }
             function napis5() {
        document.getElementById("naglowek").style.color = "pink";
        document.getElementById("wpisy").style.color = "pink";
                document.getElementById("create").style.color = "pink";
                document.getElementById("glowna").style.color = "pink";
                document.getElementById("myBar").style.color = "pink";
                document.getElementById("searchbar").style.color = "pink";
                document.getElementById("lista").style.color = "pink";
                document.getElementById("pole").style.color = "pink";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek5.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik5.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo5.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag5.png";
             }
             function napis6() {
        document.getElementById("naglowek").style.color = "rgb(141, 75, 13)";
        document.getElementById("wpisy").style.color = "rgb(141, 75, 13)";
                document.getElementById("create").style.color = "rgb(141, 75, 13)";
                document.getElementById("glowna").style.color = "rgb(141, 75, 13)";
                document.getElementById("myBar").style.color = "rgb(141, 75, 13)";
                document.getElementById("searchbar").style.color = "rgb(141, 75, 13)";
                document.getElementById("lista").style.color = "rgb(141, 75, 13)";
                document.getElementById("pole").style.color = "rgb(141, 75, 13)";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek6.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik6.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo6.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag6.png";
             }
             function napis7() {
        document.getElementById("naglowek").style.color = "blue";
        document.getElementById("wpisy").style.color = "blue";
                document.getElementById("create").style.color = "blue";
                document.getElementById("glowna").style.color = "blue";
                document.getElementById("myBar").style.color = "blue";
                document.getElementById("searchbar").style.color = "blue";
                document.getElementById("lista").style.color = "blue";
                document.getElementById("pole").style.color = "blue";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek7.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik7.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo7.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag7.png";
             }
             function napis8() {
        document.getElementById("naglowek").style.color = "white";
        document.getElementById("wpisy").style.color = "white";
                document.getElementById("create").style.color = "white";
                document.getElementById("glowna").style.color = "white";
                document.getElementById("myBar").style.color = "white";
                document.getElementById("searchbar").style.color = "white";
                document.getElementById("lista").style.color = "white";
                document.getElementById("pole").style.color = "white";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek8.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik8.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo8.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag8.png";
             }
             function napis9() {
        document.getElementById("naglowek").style.color = "orange";
        document.getElementById("wpisy").style.color = "orange";
                document.getElementById("create").style.color = "orange";
                document.getElementById("glowna").style.color = "orange";
                document.getElementById("myBar").style.color = "orange";
                document.getElementById("searchbar").style.color = "orange";
                document.getElementById("lista").style.color = "orange";
                document.getElementById("pole").style.color = "orange";
                var zdjecie = document.getElementById('house');
       zdjecie.src = "domek9.png";
       var zdjecie = document.getElementById('profile');
       zdjecie.src = "ludzik9.png";
       var zdjecie = document.getElementById('settings');
       zdjecie.src = "kolo9.png";
       var zdjecie = document.getElementById('hasz');
       zdjecie.src = "hasztag9.png";
             }
       </script>

    <!-- kolory dla tła -->
    <script>
       function kolor1() {
                 document.getElementById("calosc").style.backgroundColor = "#1d1d1d";
                 document.getElementById("create").style.backgroundColor = "#2e2d2d";
                 document.getElementById("glowna").style.backgroundColor = "#1d1d1d";
                 document.getElementById("mybar").style.backgroundColor = "#1d1d1d";
                 document.getElementById("searchbar").style.backgroundColor = "#1d1d1d";
                 document.getElementById("logowanie").style.backgroundColor = "#1d1d1d";
                 document.getElementById("lista").style.backgroundColor = "#1d1d1d";
        
              }
      function kolor2() {
                 document.getElementById("calosc").style.backgroundColor = "yellow";
                 document.getElementById("create").style.backgroundColor = "rgb(177, 177, 58)";
                 document.getElementById("glowna").style.backgroundColor = "yellow";
                 document.getElementById("mybar").style.backgroundColor = "yellow";
                 document.getElementById("searchbar").style.backgroundColor = "yellow";
                 document.getElementById("logowanie").style.backgroundColor = "yellow";
                 document.getElementById("lista").style.backgroundColor = "yellow";
        
              }
              function kolor3() {
                 document.getElementById("calosc").style.backgroundColor = "green";
                 document.getElementById("create").style.backgroundColor = "#184725";
                 document.getElementById("glowna").style.backgroundColor = "green";
                 document.getElementById("mybar").style.backgroundColor = "green";
                 document.getElementById("searchbar").style.backgroundColor = "green";
                 document.getElementById("logowanie").style.backgroundColor = "green";
                 document.getElementById("lista").style.backgroundColor = "green";
        
              }
              function kolor4() {
                 document.getElementById("calosc").style.backgroundColor = "red";
                 document.getElementById("create").style.backgroundColor = "rgb(88, 42, 24)";
                 document.getElementById("glowna").style.backgroundColor = "red";
                 document.getElementById("mybar").style.backgroundColor = "red";
                 document.getElementById("searchbar").style.backgroundColor = "red";
                 document.getElementById("logowanie").style.backgroundColor = "red";
                 document.getElementById("lista").style.backgroundColor = "red";
        
              }
              function kolor5() {
                 document.getElementById("calosc").style.backgroundColor = "pink";
                 document.getElementById("create").style.backgroundColor = "rgb(59, 10, 63)";
                 document.getElementById("glowna").style.backgroundColor = "pink";
                 document.getElementById("mybar").style.backgroundColor = "pink";
                 document.getElementById("searchbar").style.backgroundColor = "pink";
                 document.getElementById("logowanie").style.backgroundColor = "pink";
                 document.getElementById("lista").style.backgroundColor = "pink";
        
              }
              function kolor6() {
                 document.getElementById("calosc").style.backgroundColor = "rgb(141, 75, 13)";
                 document.getElementById("create").style.backgroundColor = "rgb(48, 36, 3)";
                 document.getElementById("glowna").style.backgroundColor = "rgb(141, 75, 13)";
                 document.getElementById("mybar").style.backgroundColor = "rgb(141, 75, 13)";
                 document.getElementById("searchbar").style.backgroundColor = "rgb(141, 75, 13)";
                 document.getElementById("logowanie").style.backgroundColor = "rgb(141, 75, 13)";
                 document.getElementById("lista").style.backgroundColor = "rgb(141, 75, 13)";
        
              }
              function kolor7() {
                 document.getElementById("calosc").style.backgroundColor = "blue";
                 document.getElementById("create").style.backgroundColor = "rgb(4, 21, 71)";
                 document.getElementById("glowna").style.backgroundColor = "blue";
                 document.getElementById("mybar").style.backgroundColor = "blue";
                 document.getElementById("searchbar").style.backgroundColor = "blue";
                 document.getElementById("logowanie").style.backgroundColor = "blue";
                 document.getElementById("lista").style.backgroundColor = "blue";
        
              }
              function kolor8() {
                 document.getElementById("calosc").style.backgroundColor = "white";
                 document.getElementById("create").style.backgroundColor = "rgb(121, 121, 122)";
                 document.getElementById("glowna").style.backgroundColor = "white";
                 document.getElementById("mybar").style.backgroundColor = "white";
                 document.getElementById("searchbar").style.backgroundColor = "white";
                 document.getElementById("logowanie").style.backgroundColor = "white";
                 document.getElementById("lista").style.backgroundColor = "white";
        
              }
              function kolor9() {
                 document.getElementById("calosc").style.backgroundColor = "orange";
                 document.getElementById("create").style.backgroundColor = "rgb(214, 153, 39)";
                 document.getElementById("glowna").style.backgroundColor = "orange";
                 document.getElementById("mybar").style.backgroundColor = "orange";
                 document.getElementById("searchbar").style.backgroundColor = "orange";
                 document.getElementById("logowanie").style.backgroundColor = "orange";
                 document.getElementById("lista").style.backgroundColor = "orange";
        
              }
      
        </script>
</body>
</html>
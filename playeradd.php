Plik: playeradd.php
<?php
session_start();
 
require_once 'data.php';

if(isset($_POST['submitadd']))


    

    $nick = strtoupper($_POST['nick']);
    $pass1=$_POST['ha1'];
    $pass2=$_POST['ha2'];
    $winner=$_POST['winner'];
    $topplayer=$_POST['top'];
if($pass1!=$pass2)
{
 $_SESSION['notsame'] = "<b>RÓŻNE HASŁA!!!</b>";
       header("Location:index.php#form");
}
 else   
{
    $conn = mysqli_connect ($host, $user, $pass, $baza);
    if(!$conn)
    {
      echo "wielbłąd!!";
    }
    else
    {
     $sql1="SELECT * FROM users WHERE `nick`='$nick'";
     $wynik=mysqli_query($conn,$sql1);
     if (mysqli_num_rows($wynik) == 0) 
     {
       
     $sql2="INSERT INTO users (ID, nick, haslo, winner, topplayer, points, perfect, scrypt) VALUES (NULL,'$nick','$pass1','$winner','$topplayer', '0' , '0', '')";

       mysqli_query($conn,$sql2)or die("sql not working");
       
        $_SESSION['success'] = "GRATULACJE <b>$nick !!!</b> <br>IDŹ <a style='text-decoration:none;' href='bets.php#bet'>TUTAJ</a> OBSTAW MECZE";
        header("Location:index.php#form");
     }
      
 if (mysqli_num_rows($wynik) == 1 && isset($_POST['on']))
     {
       $sqlup="UPDATE users SET winner='$winner', topplayer='$topplayer' Where haslo='$pass1'";
       mysqli_query($conn, $sqlup) or die ("nie mozna zmienic");

       $_SESSION['successUP'] = "<b>$nick</b> zmieniono twoje typy";
        header("Location:index.php#form");
        exit();

     }
     if (mysqli_num_rows($wynik) >0 ) 
    {
        
       $_SESSION['unsuccess'] = "PLAYER <b>$nick</b> ALREADY EXIST !!! TRY ANOTHER ONE";
       header("Location:index.php#form");
       
    }
   
    
}       
    }

    
mysqli_close($conn);






















?>

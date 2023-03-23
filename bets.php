Plik: bets.php
<?php 
   session_start();
?>
<?php

require_once 'data.php'; 

if(isset($_POST['sublog'])){

  $admin1=$_POST['loginpass'];

  $conect=mysqli_connect($host, $user, $pass, $baza)or die ("nie ma polaczenia");
  $pytanie="SELECT * FROM admins WHERE user='$admin1'";
  $return=mysqli_query($conect,$pytanie) or die("sql jebło");
  $xname=mysqli_fetch_assoc($return);
  if($how=mysqli_num_rows($return)>0){
    
    $_SESSION['adminlog']=" Witaj admirale ".$xname['nazwisko'];
    header('location: test.php');
    
    

  }
  else{
    $error=" NIE MASZ UPRAWNIEN WIĘC SPADAJ !";
  }
  mysqli_close($conect);
}       
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Katar2022WC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link href="style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
        $("#btnlog").click(function () {
          $("#btnlog").hide();
          $(".admin").show();
        });
      });      
  </script>
  <style>
  
  </style>
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
      <?php

        

      if(isset($_POST['submit'])){
        $_name=$_POST['pass'];
        $_1a=$_POST['1a'];
        $_1b=$_POST['1b'];
        $_2a=$_POST['2a'];
        $_2b=$_POST['2b'];
      /*$_3a=$_POST['3a'];
        $_3b=$_POST['3b'];
        $_4a=$_POST['4a'];
        $_4b=$_POST['4b'];
        $_5a=$_POST['5a'];
        $_5b=$_POST['5b'];
        $_6a=$_POST['6a'];
        $_6b=$_POST['6b'];
        $_7a=$_POST['7a'];
        $_7b=$_POST['7b'];
        $_8a=$_POST['8a'];
        $_8b=$_POST['8b'];
        $_9a=$_POST['9a'];
        $_9b=$_POST['9b'];
        $_10a=$_POST['10a'];
        $_10b=$_POST['10b'];
        $_11a=$_POST['11a'];
        $_11b=$_POST['11b'];
        $_12a=$_POST['12a'];
        $_12b=$_POST['12b'];
        $_13a=$_POST['13a'];
        $_13b=$_POST['13b'];
        $_14a=$_POST['14a'];
        $_14b=$_POST['14b'];
        $_15a=$_POST['15a'];
        $_15b=$_POST['15b'];
        $_16a=$_POST['16a'];
        $_16b=$_POST['16b']; 
      */

          $conn=mysqli_connect($host, $user, $pass, $baza) or die ("connection error");
          $sql1="SELECT * FROM finals WHERE kto='$_name'";
          $wynik1=mysqli_query($conn,$sql1);

    if(mysqli_num_rows($wynik1)>0)
      {
            
        $sql2="UPDATE finals SET 1a=$_1a, 1b=$_1b, 2a=$_2a, 2b=$_2b WHERE kto='$_name'";/* 3a=$_3a, 3b=$_3b, 4a=$_4a, 4b=$_4b  5a=$_5a, 5b=$_5b, 6a=$_6a, 6b=$_6b, 7a=$_7a, 7b=$_7b, 8a=$_8a, 8b=$_8b, 9a=$_9a, 9b=$_9b, 10a=$_10a, 10b=$_10b, 11a=$_11a, 11b=$_11b, 12a=$_12a, 12b=$_12b, 13a=$_13a, 13b=$_13b, 14a=$_14a, 14b=$_14b, 15a=$_15a, 15b=$_15b, 16a=$_16a, 16b=$_16b*/    
        if($wynik2=mysqli_query($conn,$sql2))
        {
          $_SESSION['changebet'] = "ZMIENIONO TWOJE TYPY. POWODZENIA !!! !";
        }  
      }       
    else
      {
        $sql3="SELECT nick FROM users WHERE haslo='$_name'";
        $wynik3=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($wynik3)==1){
        $sql4="INSERT INTO finals (ID, kto, 1a, 1b, 2a, 2b)/* 3a, 3b, 4a, 4b, 5a, 5b, 6a, 6b, 7a, 7b, 8a, 8b, 9a, 9b, 10a, 10b, 11a, 11b, 12a, 12b, 13a, 13b, 14a, 14b, 15a, 15b, 16a, 16b*/
        VALUES (NULL,'$_name',$_1a,$_1b,$_2a,$_2b)"/*$_3a,$_3b,$_4a,$_4b,$_5a,$_5b,$_6a,$_6b,$_7a,$_7b,$_8a,$_8b,$_9a,$_9b,$_10a,$_10b,$_11a,$_11b,$_12a,$_12b,$_13a,$_13b,$_14a,$_14b,$_15a,$_15b,$_16a,$_16b*/;
      if($wynik4=mysqli_query($conn,$sql4)){

        $_SESSION['okbet'] = "DODANO TWOJE TYPY. POWODZENIA !!! !";

      }
      else{
        
        $_SESSION['nokbet'] = "SPRÓBUJ RAZ JESZCZE LUB SKONTAKTUJ SIE Z ADMINEM !!! !";

      }
    
        }
        else{

          $_SESSION['nietplayer'] = "NIE MA TAKIEGO GRACZA W BAZIE.</br>JESLI JESTES ZAREJESTROWANY SPRAWDZ SWOJE HASŁO BADZ SKONTAKTUJ SIE Z ADMINEM !!! !";

        }
      }
         mysqli_close($conn);
    }
       
      ?>

<div class=" bg text-white text-center align-items-center justify-content-center">
                 <!-- Masthead Avatar Image
                <a href='https://.pngtree.com/so/katar'>katar png z .pngtree.com/</a>-->
               
                <img  class="masthead-avatar  mb-5 mt-5" src="img/smallprize.png" alt="puchar" />
               
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> 
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pt-2" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="index.php#form">Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#bet">Bets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="https://www.google.com/search?q=terminarz+mistrzostw+%C5%9Bwiata+2022&sxsrf=ALiCzsZKevmvFjksoTAlbFRe4NB8AM6nkw%3A1666471033046&source=hp&ei=eVRUY9gz8uWuBKa9h8AO&iflsig=AJiK0e8AAAAAY1RiiX5nimgJtUk19A-cbAaGolpeMmxe&oq=terminarz&gs_lcp=Cgdnd3Mtd2l6EAEYADIECCMQJzIECCMQJzIOCAAQgAQQsQMQgwEQiwMyDggAEIAEELEDEIMBEIsDMg4IABCABBCxAxCDARCLAzILCAAQsQMQgwEQiwMyDggAEIAEELEDEIMBEIsDMggIABCABBCLAzIOCAAQgAQQsQMQgwEQiwMyDggAEIAEELEDEIMBEIsDOgoIABCABBADEIsDOgsIABCABBCxAxCDAToICAAQgAQQsQM6EQguEIAEELEDEIMBEMcBENEDOgsILhCABBDHARDRAzoLCC4QgAQQxwEQrwE6CAguELEDEIMBOgsILhCxAxCDARCLAzoRCC4QgAQQsQMQxwEQrwEQiwM6CwguEIAEELEDEIsDOhcILhCABBCxAxDHARCvARCLAxCoAxCmAzoWCC4QgAQQxwEQ0QMQChCLAxDSAxCoAzoJCCMQJxBGEP0BOhAILhCABBCxAxDHARDRAxAKOgUIABCABDoICC4QgAQQsQM6CwgAEIAEELEDEIsDOg4ILhCABBCxAxDUAhCLAzoFCC4QgARQAFjAC2CcE2gAcAB4AIABb4gB4gaSAQM2LjOYAQCgAQG4AQM&sclient=gws-wiz#sie=lg;/m/0fp_8fm;2;/m/030q7;st;fp;1;;;">Wyniki</a>
      </li>
      <li class="nav-item">
             <button class="btn btn-primary mx-sm-2 mb-1" id="btnlog"><i class="fa fa-sign-in px-1" aria-hidden="true"></i>ADMIN</button>   
          <div class="admin ms-sm-2 mt-1 " style="display:none;">
            <form class="d-flex flex-row " action="" method="POST">
              <label><input class="text-center" placeholder="ADMIN PASS" type="password" name="loginpass" maxlength="12" </label>
              <button class="btn btn-primary btn-sm mb-1" type="submit"  name="sublog">LOG IN</button>
            </form>
          </div>
      </li>
    </ul>

    </div>
  </div>
</nav>

<div class="container ">
 <div class="row " id="bet">
  <div class=" justify-content-center mx-auto">
   <form class="mx-auto justify-content-center" action="" method="POST">
    <h2 class="py-3 my-2"> <b>FINALS</b>  </h2><input class="py-1 mx-auto mb-2 text-center btnmo" maxlength="12" type="password"  placeholder="Twoje Hasło" name="pass" data-bs-trigger="focus" data-bs-toggle="popover" data-bs-placement="top" title="UWAGA WAŻNE !!!" data-bs-content="Użyj tego samego hasła co przy rejestracji" required/>
<div class=" d-flex flex-row justify-content-center mx-auto">
  <div class=" col-6  my-3 ">
        <div class="col ">
<div><h5>MECZ O 1 MIEJSCE</h5></div>
<div class="ps-3 py-2"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="1a"/><img class="my-1 me-2" src="img/flagi/ar.png"><img class="my-1 me-2" src="img/flagi/fr.png"><input class=" NOBORDER ms-2" type="number" value="0" style="width: 2em" max="9" min="0" name="1b"/> </div>
<div><h5>MECZ O 3 MIEJSCE</h5></div>
<div class="ps-3 pt-2"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="2a"/><img class="my-1 me-2" src="img/flagi/hr.png"><img class="my-1 me-2" src="img/flagi/ma.png"><input class=" NOBORDER ms-2" type="number" value="0" style="width: 2em" max="9" min="0" name="2b"/></div>
<!--<div class="ps-3"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3a"/><img class="my-1 me-2" src="img/flagi/fr.png"><img class="my-1 me-2" src="img/flagi/pl.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3b"/></div>
<div class="ps-3"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4a"/><img class="my-1 me-2" src="img/flagi/an.png"><img class="my-1 me-2" src="img/flagi/sn.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4b"/></div>
  -->    </div>
  <!--      <div class="col">
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="5a"/><img class="my-1 me-2" src="img/flagi/tn.png"><img class="my-1 me-2" src="img/flagi/fr.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="5b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="6a"/><img class="my-1 me-2" src="img/flagi/au.png"><img class="my-1 me-2" src="img/flagi/dk.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="6b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7a"/><img class="my-1 me-2" src="img/flagi/pl.png"><img class="my-1 me-2" src="img/flagi/ar.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8a"/><img class="my-1 me-2" src="img/flagi/sa.png"><img class="my-1 me-2" src="img/flagi/mx.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8b"/></div>
        </div> -->
  </div>
  <div class="col-6 col-md-3 my-3 "> 
      <div class="col">
<!--<div class="ps-3 pt-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3a"/><img class="my-1 me-2" src="img/flagi/ma.png"><img class="my-1 me-2" src="img/flagi/pt.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4a"/><img class="my-1 me-2"src="img/flagi/an.png"><img class="my-1 me-2" src="img/flagi/fr.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7a"/><img class="my-1 me-2"src="img/flagi/ma.png"><img class="my-1 me-2" src="img/flagi/es.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8a"/><img class="my-1 me-2"src="img/flagi/pt.png"><img class="my-1 me-2" src="img/flagi/ch.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8b"/></div> -->
      </div> 
  <!--    <div class="col">  
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="13a"/><img class="my-1 me-2"src="img/flagi/kr.png"><img class="my-1 me-2" src="img/flagi/pt.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="13b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="14a"/><img class="my-1 me-2"src="img/flagi/gh.png"><img class="my-1 me-2" src="img/flagi/uy.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="14b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="15a"/><img class="my-1 me-2"src="img/flagi/rs.png"><img class="my-1 me-2" src="img/flagi/ch.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="15b"/></div>
<div class="ps-3"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="16a"/><img class="my-1 me-2"src="img/flagi/cm.png"><img class="my-1 me-2" src="img/flagi/br.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="16b"/></div>
      </div> -->
  </div>
</div>   
<?php
if(isset($_SESSION['okbet'] )){
 echo "<span style='color:green;font-size:large;'>".$_SESSION['okbet']."</span>"; 
unset($_SESSION['okbet']);
}
if(isset($_SESSION['changebet'] )){
 echo "<span style='color:green;font-size:large;'>".$_SESSION['changebet']."</span>"; 
unset($_SESSION['changebet']);
}
if(isset($_SESSION['nokbet'] )){
 echo "<span style='color:red;font-size:large;'>".$_SESSION['nokbet']."</span>"; 
unset($_SESSION['nokbet']);
}
if(isset($_SESSION['nietplayer'] )){
 echo "<span style='color:red;font-size:large;'>".$_SESSION['nietplayer']."</span>"; 
unset($_SESSION['nietplayer']);
}

?>
                  <div class="d-flex justify-content-xs-center  justify-content-sm-end my-4">
                  <button type="button" name="submit" class="btn btn-secondary mb-3 btn-md">SEND MY BETS</button>
                  </div>
</form>  
                                           
                             
   
  </div>
 </div>
</div>
<script>
$(document).ready(function(){
  $('[data-bs-toggle="popover"]').popover();   
});
</script>
</body>
</html>
              

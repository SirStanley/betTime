Plik: changebet2.php
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

       if(isset($_POST['pass']))
       {
     $conn=mysqli_connect($host, $user, $pass, $baza) or die ("connection error"); 
     $_name=$_POST['pass'];
     $sql="SELECT nick FROM users WHERE haslo='$_name'";  
     $result=mysqli_query($conn,$sql);
     
     if(mysqli_num_rows($result)>0){
      if(isset($_POST['submit1'])){

        $_name=$_POST['pass'];
        $_1a=$_POST['1a'];
        $_1b=$_POST['1b'];
        $_2a=$_POST['2a'];
        $_2b=$_POST['2b'];
        $_3a=$_POST['3a'];
        $_3b=$_POST['3b'];
        $_4a=$_POST['4a'];
        $_4b=$_POST['4b'];


          
          $sql1="UPDATE daytwo SET 1a=$_1a, 1b=$_1b, 2a=$_2a, 2b=$_2b, 3a=$_3a, 3b=$_3b, 4a=$_4a, 4b=$_4b WHERE kto='$_name'";
          $wynik1=mysqli_query($conn,$sql1);

           $_SESSION['changebet'] = '<img src="img/check.gif"><span style="color:green;padding-left:5px;">ZMIENIONO</span>';
      }
      
      
          

      if(isset($_POST['submit2'])){ 
        $_name=$_POST['pass']; 
        $_5a=$_POST['5a'];
        $_5b=$_POST['5b'];
        $_6a=$_POST['6a'];
        $_6b=$_POST['6b'];
        $_7a=$_POST['7a'];
        $_7b=$_POST['7b'];
        $_8a=$_POST['8a'];
        $_8b=$_POST['8b'];

          $sql2="UPDATE daytwo SET 5a=$_5a, 5b=$_5b, 6a=$_6a, 6b=$_6b, 7a=$_7a, 7b=$_7b, 8a=$_8a, 8b=$_8b WHERE kto='$_name'";
          $wynik2=mysqli_query($conn,$sql2);

            $_SESSION['changebet'] = '<img src="img/check.gif"><span style="color:green;padding-left:5px;">ZMIENIONO</span>';
      }
       
        if(isset($_POST['submit3'])){
        $_name=$_POST['pass'];
        $_9a=$_POST['9a'];
        $_9b=$_POST['9b'];
        $_10a=$_POST['10a'];
        $_10b=$_POST['10b'];
        $_11a=$_POST['11a'];
        $_11b=$_POST['11b'];
        $_12a=$_POST['12a'];
        $_12b=$_POST['12b'];

        $sql3="UPDATE daytwo SET 9a=$_9a, 9b=$_9b, 10a=$_10a, 10b=$_10b, 11a=$_11a, 11b=$_11b, 12a=$_12a, 12b=$_12b WHERE kto='$_name'";
        $wynik3=mysqli_query($conn,$sql3);
                echo"$_9a,$_9b";
                $_SESSION['changebet'] = '<img src="img/check.gif"><span style="color:green;padding-left:5px;">ZMIENIONO</span>';

        }
         
        if(isset($_POST['submit4'])){
        $_name=$_POST['pass'];
        $_13a=$_POST['13a'];
        $_13b=$_POST['13b'];
        $_14a=$_POST['14a'];
        $_14b=$_POST['14b'];
        $_15a=$_POST['15a'];
        $_15b=$_POST['15b'];
        $_16a=$_POST['16a'];
        $_16b=$_POST['16b'];

          $sql4="UPDATE daytwo SET 13a=$_13a, 13b=$_13b, 14a=$_14a, 14b=$_14b, 15a=$_15a, 15b=$_15b, 16a=$_16a, 16b=$_16b WHERE kto='$_name'";
          $wynik4=mysqli_query($conn,$sql4);
   
           $_SESSION['changebet'] = '<img src="img/check.gif"><span style="color:green;padding-left:5px;">ZMIENIONO</span>';
        }
 
        mysqli_close($conn);  
    }
    else{
        $_SESSION['notchangebet'] = '<img src="img/epic.gif"><span style="color:red;padding-left:5px;">ZŁE HASŁO !</span>';
    }
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
        <a class="nav-link " href="bets.php#bet">Bets</a>
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
<h2 class="py-3 my-2"> <b>2</b><i>ND</i> ROUND  </h2>
<input class="py-1 mx-auto mb-2 text-center btnmo" maxlength="12" type="password"  placeholder="Twoje Hasło" name="pass" data-bs-trigger="focus" data-bs-toggle="popover" data-bs-placement="top" title="UWAGA WAŻNE !!!" data-bs-content="Użyj tego samego hasła co przy rejestracji" required/>
<?php
if(isset($_SESSION['changebet'] )){
 echo $_SESSION['changebet']; 
unset($_SESSION['changebet']);
}
if(isset($_SESSION['notchangebet'] )){
 echo $_SESSION['notchangebet']; 
unset($_SESSION['notchangebet']);
}
?> 
<div class=" d-flex flex-row justify-content-center mx-auto">
  <div class=" col-6  my-3 justify-content-center">
        <div class=" ramka justify-content-center">
<div class="ps-4"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="1a"/><img class="my-1 me-2" src="img/flagi/wls.png"><img class="my-1 me-2" src="img/flagi/ir.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="1b"/> </div>
<div class="ps-4"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="2a"/><img class="my-1 me-2" src="img/flagi/qa.png"><img class="my-1 me-2" src="img/flagi/sn.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="2b"/></div>
<div class="ps-4"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3a"/><img class="my-1 me-2" src="img/flagi/nl.png"><img class="my-1 me-2" src="img/flagi/ec.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="3b"/></div>
<div class="ps-4"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4a"/><img class="my-1 me-2" src="img/flagi/an.png"><img class="my-1 me-2" src="img/flagi/us.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="4b"/></div>
            <div class="d-flex justify-content-center my-3">
                    <button type="button" name="submit1"  class="btn btn-secondary mb-3 btn-md"><b>SEND</b></button>
            </div>
        </div>
        <div class=" ramka justify-content-center">
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="5a"/><img class="my-1 me-2" src="img/flagi/tn.png"><img class="my-1 me-2" src="img/flagi/au.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="5b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="6a"/><img class="my-1 me-2" src="img/flagi/pl.png"><img class="my-1 me-2" src="img/flagi/sa.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="6b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7a"/><img class="my-1 me-2" src="img/flagi/fr.png"><img class="my-1 me-2" src="img/flagi/dk.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="7b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8a"/><img class="my-1 me-2" src="img/flagi/ar.png"><img class="my-1 me-2" src="img/flagi/mx.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="8b"/></div>
            <div class="d-flex justify-content-center   my-3">
                    <button type="button" name="submit2" class="btn btn-secondary mb-3 btn-md"><b>SEND</b></button>
            </div>
        </div> 
  </div>
  <div class="col-6  my-3 justify-content-center"> 
      <div class=" ramka justify-content-center">
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="9a"/><img class="my-1 me-2" src="img/flagi/jp.png"><img class="my-1 me-2" src="img/flagi/cr.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="9b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="10a"/><img class="my-1 me-2"src="img/flagi/be.png"><img class="my-1 me-2" src="img/flagi/ma.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="10b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="11a"/><img class="my-1 me-2"src="img/flagi/hr.png"><img class="my-1 me-2" src="img/flagi/ca.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="11b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="12a"/><img class="my-1 me-2"src="img/flagi/es.png"><img class="my-1 me-2" src="img/flagi/de.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="12b"/></div>
            <div class="d-flex justify-content-center   my-3">
                    <button type="button" name="submit3" class="btn btn-secondary mb-3 btn-md"><b>SEND</b></button>
            </div>
      </div> 
      <div class="justify-content-center ramka">  
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="13a"/><img class="my-1 me-2"src="img/flagi/cm.png"><img class="my-1 me-2" src="img/flagi/rs.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="13b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="14a"/><img class="my-1 me-2"src="img/flagi/kr.png"><img class="my-1 me-2" src="img/flagi/gh.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="14b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="15a"/><img class="my-1 me-2"src="img/flagi/br.png"><img class="my-1 me-2" src="img/flagi/ch.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="15b"/></div>
<div class="ps-4"><input class="  NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="16a"/><img class="my-1 me-2"src="img/flagi/pt.png"><img class="my-1 me-2" src="img/flagi/uy.png"><input class=" NOBORDER" type="number" value="0" style="width: 2em" max="9" min="0" name="16b"/></div>
            <div class="d-flex justify-content-center   my-3">
                    <button type="button" name="submit4" class="btn btn-secondary mb-3 btn-md"><b>SEND</b></button>
            </div>
      </div>
  </div>
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
              

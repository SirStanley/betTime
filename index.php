Plik: index.php
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
<html lang="pl">
<head>
  <title>Katar2022WC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link href="style.css" rel="stylesheet">
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script>
   $(document).ready(function () {
        $(".l1").click(function () {
          $(".box2,.box3,.box4,.box5,.box6,.box7").hide();
          $(".box1").show();
          $(this).addClass("active");
          $(".l2,.l3,.l4,.l5,.l6,.l7").removeClass("active");
        });
      });
      $(document).ready(function () {
        $(".l2").click(function () {
          $(".box1,.box3,.box4,.box5,.box6,.box7").hide();
          $(".box2").show();
          $(this).addClass("active");
          $(".l1,.l3,.l4,.l5,.l6,.l7").removeClass("active");
        });
      });
      $(document).ready(function () {
        $(".l3").click(function () {
          $(".box1,.box2,.box4,.box5,.box6,.box7").hide();
          $(".box3").show();
          $(this).addClass("active");
          $(".l1,.l2,.l4,.l5,.l6,.l7").removeClass("active");
        });
      });
      $(document).ready(function () {
        $(".l4").click(function () {
          $(".box1,.box2,.box3,.box5,.box6,.box7").hide();
          $(".box4").show();
          $(this).addClass("active");
          $(".l1,.l2,.l3,.l5,.l6,.l7").removeClass("active");
        });
      });
      $(document).ready(function () {
        $(".l5").click(function () {
          $(".box1,.box2,.box3,.box4,.box6,.box7").hide();
          $(".box5").show();
          $(this).addClass("active");
          $(".l1,.l2,.l3,.l4,.l6,.l7").removeClass("active");
        });
      });
      $(document).ready(function () {
        $(".l6").click(function () {
          $(".box1,.box2,.box3,.box4,.box5,.box7").hide();
          $(".box6").show();
          $(this).addClass("active");
          $(".l1,.l2,.l3,.l4,.l5,.l7").removeClass("active");
        });
      });
       $(document).ready(function () {
        $(".l7").click(function () {
          $(".box1,.box2,.box3,.box4,.box5,.box6").hide();
          $(".box7").show();
          $(this).addClass("active");
          $(".l1,.l2,.l3,.l4,.l5,.l6").removeClass("active");
        });
      });
      $(document).ready(function () {
        $("#btnlog").click(function () {
          $("#btnlog").hide();
          $(".admin").show().fadeIn(500);
        });
      });  
      $(document).ready(function () {
        $("#btnform").click(function () {
          $("#scorer,#regulamin,#btnform").hide();
          $("#playeradd,#btnbook,#btnscorer").show().fadeIn(500);
        });
      });   
      $(document).ready(function () {
        $("#btnbook").click(function () {
          $("#scorer,#playeradd,#btnbook").hide();
          $("#regulamin,#btnform,#btnscorer").show().fadeIn(500);
        });
      });   
      $(document).ready(function () {
        $("#btnscorer").click(function () {
          $("#regulamin,#playeradd,#btnscorer").hide();
          $("#scorer,#btnform,#btnbook").show().fadeIn(500);
        });
      });                                                           
</script> 


    
  
</head>

<body>


<div class=" bg text-white text-center align-items-center justify-content-center">
                 <!-- Masthead Avatar Image
                <a href='https://.pngtree.com/so/katar'>katar png z .pngtree.com/</a>-->
               
                <img  class="masthead-avatar  mb-5 mt-5" src="img/smallprize.png" alt="puchar" />
               
</div>
<!-- navigation bar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="form"> 
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
        <button class="btn btn-success mx-sm-2 mb-1 ttg" id="btnform"  ><i class="fa fa-user-plus  " aria-hidden="true"></i>SIGN IN</button>
      </li>
      <li class="nav-item" >
        <button class="btn btn-success mx-sm-2 mb-1 pe-3 ttg" id="btnbook"><i class="fa fa-book  " aria-hidden="true"></i>  RULES</button>
      </li>
      <li class="nav-item">
        <button class="btn btn-success mx-sm-2 mb-1 pe-3 ttg" id="btnscorer" style="display:none;"><i class="fa fa-futbol-o" aria-hidden="true"></i> TOP 6 </button>
      </li>
      <li class="nav-item">
             <button class="btn btn-primary mx-sm-2 mb-1 ttg" id="btnlog"><i class="fa fa-sign-in " aria-hidden="true"></i> ADMIN </button>   
          <div class="admin ms-sm-2 mt-1 " style="display:none;">
            <form class="d-flex flex-row " action="" method="POST">
              <label><input class="text-center" placeholder="ADMIN PASS" type="password" name="loginpass" maxlength="10" </label>
              <button class="btn btn-primary btn-sm mb-1" type="submit"  name="sublog">LOG IN</button>
            </form>
          </div>
      </li>
    </ul>
   </div> 
<?php       
 if(isset($error)){
   echo "<span style='color:red;font-size:large;padding: left 5px;'><b> ".$error."</b></span>"; 
   unset($error);
}
if(isset($_SESSION['adminerror'] )){
 echo "<span style='color:red;font-size:large;padding-left:10px;'>".$_SESSION['adminerror']."</span>"; 
unset($_SESSION['adminerror']);
}
?>  
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-5  mt-1" >
  <!-- Regulamin -->    
          <div class="text-center reg" id="regulamin" style="display:none;" >
             <div id="carouselExampleControlsNoTouching" class="carousel carousel-dark slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h3 class="pt-2 pt-sm-0"><b>Regulamin</b></h3>
                  <h5 class="pt-2 pt-sm-0">Rejestracja</h5>
                      <ol>
                        <li>
                          Aby móc uczestniczyć w naszej zabawie należy założyć konto w zakładce <b><i>SIGN IN</i></b>
                        </li>
                        <li>
                          Proszę unikać spacji przy wpisywaniu nicka i hasła.
                        </li>
                        <li>
                          Po założeniu konta należy przekazać wpisowe  jednemu z administratorów.
                        </li>
                      </ol>
                      <h5>Zakłady</h5>                     
                      <ol>
                        <li>
                          Zakłady obstawiamy w zakładce <b><i>BETS</i></b> 
                        </li>
                        <li>
                          <span style="color:red;"><i>Do prawidłowego wysłania swoich zakładów potrzebne będzie hasło <br> z etapu rejestracji</i></span> 
                        </li>
                        <li>
                        W przypadku potrzeby odzyskania hasła skontaktuj się z adminem.
                        </li>
                        <li>
                        Zakłady poprawiać można dowolną ilość razy w przeznaczonym do tego czasie.
                        </li>
                        <li>
                        Zakłady obstawiać lub poprawiać można najpóźniej do rozpoczęcia pierwszego meczu każdego  dnia meczowego!!
                        </li>
                         <li>
                        Wyniki aktualizowane bedą po ostatnim meczu każdego dnia meczowego.
                        </li>
                      </ol>
                      <div class="pt-4"><p>1/3</p></div>
                </div>
                <div class="carousel-item">
                                  
                     <h5 class="py-4 py-sm-0">Punktacja</h5>                    
                      <ol>
                        <li>
                          Za odgadnięcie wyniku meczu <b>1 PKT</b>
                        </li>
                        <li>
                          Za odgadnięcie wyniku meczu wraz z dokładną iloscią goli <b>3 PKT</b> oraz <b>1</b> <i>PERFECTBET</i>
                        </li>
                        <li>
                          Za prawidłowe wytypowanie mistrza bądź króla strzelców będzie można dodatkowo zdobyć po <b>5 PKT</b>
                        </li>
                        <li>
                          Punkty <i>PERFECTBET</i> bedą również decydowały o kolejności graczy .
                        </li>                       
                      </ol>
                      <h5 class="py-3 py-sm-0">Wygrana</h5>
                      <ol>
                        <li>
                          O kolejności graczy decydowac będą zdobyte punkty .
                        </li>
                        <li>
                          W razie takiej samej liczby punktów decydować będą zdobyte punkty <i>PERFECTBET</i>
                        </li>
                        <li>
                         Jeżeli obie punktacje będą identyczne to pula za dane miejsca będzie zsumowana i podzielona pomiędzy tych graczy.
                        </li>
                        <li>
                          Pula zależy tylko i wyłącznie od ilosci graczy i będzie rozdzielona w całości pomiędzy zwycięzców
                        </li>
                      </ol>
                      <div><p>2/3</p></div>
                </div>
                <div class="carousel-item ">
                  
                  <h5  class="py-3 py-sm-0">Podział puli </h5>
                  
                      <ul  style="list-style-type: none;">
                        <li>Miejsce 1 => Wpisowe x 15</li>
                        <li>Miejsce 2 => Wpisowe x 8</li>
                        <li>Miejsce 3 => Wpisowe x 3</li>
                        <li>Miejsce 4 => Wpisowe x 1</li>
                      </ul>
                      <h5 class="py-3 mt-4 py-sm-0">Warto wiedzieć </h5>
                      <ol>
                        <li>Wszystkie swoje zakłady można podglądać na bieżąco klikając w tabeli na swój <i>NICK</i></li> 
                        <li>Zakładka <b><i>MAIN</i></b> odsyła do strony głównej.</li>
                        <li>Zakładka <b><i>Wyniki</i></b> odsyła do innej strony gdzie można sprawdzić aktualne wyniki meczy, tabele itd. </li>
                        <li>Zakładka <b><i>ADMIN</i></b> przeznaczona jest tylko dla administratorów strony.</li>
                        <li>W zakładce <b><i>TOP 6</i></b> można sprawdzić aktualna klasyfikacje strzelców.</li>
                        <li>W razie jakichkolwiek problemów z działaniem strony prosze kontaktować sie z adminami na grupie bądź bezposrednio</li>
                      </ol>
                      
                     <div class="mt-4"><p>3/3</p></div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon p-0 m-0" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon justify-content-end" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        
    </div>
      <div class="reg" id="scorer" >
<?php
   include 'topscorer.php';
?>     
      </div>
     
        <div class="card text-black reg"  id="playeradd" style="display:none;">
          <div class="card-body p-lg-3">
            <div class="row justify-content-center">  
              
           
<?php
if(isset($_SESSION['success'] )){
 echo "<span style='color:green;font-size:large;'>".$_SESSION['success']."</span>"; 
unset($_SESSION['success']);
}
if(isset($_SESSION['successUP'] )){
 echo "<span style='color:green;font-size:large;'>".$_SESSION['successUP']."</span>"; 
unset($_SESSION['successUP']);
}
if(isset($_SESSION['unsuccess'] )){
 echo "<span style='color:red;font-size:large;'>".$_SESSION['unsuccess']."</span>"; 
unset($_SESSION['unsuccess']);
}
if(isset($_SESSION['notsame'] )){
 echo "<span style='color:red;font-size:large;text-align:center;'>".$_SESSION['notsame']."</span>"; 
unset($_SESSION['notsame']);
}

?> 
              
                <h2 class="py-4 text-center">Załóż konto</h2>

                <form class="pt-3" method="POST" action="playeradd.php" >

                  <div class="d-flex flex-row  ">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" placeholder="Twój nick" name="nick" class="form-control my-1 " required/>
                      <label class="form-label" for="form3Example1c"></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row  ">
                    
                   <div class="form-outline flex-fill mb-3">
                      <select class="form-select my-1 " name="winner"  aria-label="Default select example" required>
                        <option hidden value=""> Mistrz...</option>
                        <option value='<img src="img/flagi/an.png">'>Anglia</option>
                        <option value='<img src="img/flagi/ar.png">'>Argentyna</option>
                        <option value='<img src="img/flagi/be.png">'>Belgia</option>
                        <option value='<img src="img/flagi/br.png">'>Brazylia</option>
                        <option value='<img src="img/flagi/hr.png">'>Chorwacja</option>
                        <option value='<img src="img/flagi/dk.png">'>Dania</option>
                        <option value='<img src="img/flagi/fr.png">'>Francja</option>
                        <option value='<img src="img/flagi/nl.png">'>Holandia</option>
                        <option value='<img src="img/flagi/mx.png">'>Meksyk</option>
                        <option value='<img src="img/flagi/de.png">'>Niemcy</option>
                        <option value='<img src="img/flagi/pl.png">'>Polska</option>
                        <option value='<img src="img/flagi/pt.png">'>Portugalia</option>
                        <option value='<img src="img/flagi/sn.png">'>Senegal</option>
                        <option value='<img src="img/flagi/uy.png">'>Urugwaj</option>
                        <option value='<img src="img/flagi/wls.png">'>Walia</option>
                        
                      </select>
                    </div>
                    <div class="form-outline flex-fill mb-3">
                      <select  class="form-select my-1 " name="top"  aria-label="Default select example" required>
                        <option hidden value="">Król...</option>
                        <option value='ronaldo'>C.Ronaldo</option>
                        <option value='mbape'>K.Mbappe</option>
                        <option value='messi'>L.Messi</option>
                        <option value='benzema'>K.Benzema</option>
                        <option value='kane'>H.Kane</option>
                        <option value='neymar'>Neymar</option>
                        <option value='lukaku'>R.Lukaku</option>
                        <option value='valverde'>F.Valverde</option> 
                        <option value='lewy'>R.Lewandowski</option>                       
                        <option value='garet'>G.Bale</option>
                        <option value='richarlison'>Richarlison</option>
                        <option value='deBruyne'>K.de Bruyne</option>
                        <option value='vlahovic'>D.Vlahovic</option>
                        <option value='vinicius'>Vinicius Jr.</option>
                        <option value='mane'>S.Mane</option>
                        <option value='tadic'>D.Tadic</option>                         
                        <option value='morata'>A.Morata</option>
                        <option value='depay'>M.Depay</option>
                        <option value='cavani'>E.Cavani</option>
                        <option value='havertz'>K.Havertz</option>
                        <option value='muller'>T.Muller</option>
                        <option value='modric'>L.Modric</option>
                        
                      </select>
                    </div>
                    
                  </div>
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="on" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                       <b> chce zmienic mistrza oraz króla </b>
                      </label>
                    </div>
                  <div class="d-flex flex-row ">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" minlength="5" maxlength="10" placeholder="Twoje hasło min.5 znaków" name="ha1" class="form-control my-2" required/>
                      <label class="form-label"  for="form3Example4c"></label>
                    </div>
                  </div>

                 <div class="d-flex flex-row ">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c"  placeholder="Powtórz Hasło" name="ha2" class="form-control my-2" required/>
                      <label class="form-label"  for="form3Example4c"></label>
                    </div>
                  </div>

                 

                  <div class="d-flex justify-content-center my-3 py-2 ">
                    <button type="button" name="submitadd" class="btn btn-secondary btn-lg">Sign In</button>
                  </div>

                </form>

              </div>
              
            </div>
          </div>   
        

    
    <hr class="d-sm-none">
    </div>
    <div class="col-sm-7 " >
<?php

     
     
$conn = new mysqli ($host, $user, $pass, $baza);

if ($conn-> connect_error) {
die ( "Połączenie nie powiodło się:" );
}
else{
   

$result=$conn->query("select * from users order by points DESC, perfect DESC, nick ASC");
$ilewas=$result->num_rows;
if ($result-> num_rows >= 0) {
    
    $sumof=$ilewas*30;

                 echo'<div class="table-responsive-sm ">';
                 echo'<table class="table table-borderless table-hover table-sm   pb-5 brd">';
                 echo"<thead>";
                 echo'<tr>';
                 echo'<h2 class="text-center mb-2 pt-2"><i><b>KLASYFIKACJA</b></i></h2>';
                 echo'<div class="text-center py-3">';
                 echo'<p><b>Graczy : '.$ilewas.'</b></p>';
                 echo'<p><b>Pula : '.$sumof.'</b></p>';
                 echo'</div>';
                 echo' <th class="mb-3 col-6" scope="col">NICK</th>';
                 echo' <th class="text-center  col-3" scope="col">PUNKTY</th>';
                 echo' <th class="text-center  col-3" scope="col">PERFECT</th>';
                 echo' <th class="text-center  col-3" scope="col">MISTRZ</th>';
                 echo' <th class="text-center  col-3" scope="col">KRÓL</th>';
                 echo"</tr>";
                 echo"</thead>";
                 echo"<tbody>";
                 

while ($row = $result-> FETCH_ASSOC ()) 

{
$name=".png";



echo '<tr style="height:60px;cursor:pointer;" data-bs-toggle="modal" data-bs-target="#'.$row['nick'].'" ><td class="pt-3" style="color:blue;"><b>'.$row['nick'].'</b></td><td class="pt-3 text-center"><b>'.$row['points'].'</b></td><td class="pt-3 text-center"><b>'.$row['perfect'].'</b></td><td class="pt-3 text-center">'.$row['winner'].'</td><td class=" text-center"><img src="img/'.$row['topplayer'].'.png"></td></tr>';

echo'<div class="modal fade" id="'.$row['nick'].'">';
echo'<div class="modal-dialog modal-lg">';
echo'<div class="modal-content">';    
echo'<div class="modal-header">';      
echo'<button type="button" class="btn-close" data-bs-dismiss="modal">';
echo'</button>';
echo'</div>';    
echo'<div class="modal-body">';        
echo'<div class="box1 text-center " >';
     include "show.php";    
echo'</div>';
echo'<div class="box2 text-center" style="display:none;">';
     include "show2.php";  
echo'</div>';
echo'<div class="box3 text-center" style="display:none;">';
     include "show3.php";
echo'</div>';
echo'<div class="box4 text-center" style="display:none;">';
     include "show4.php";
echo'</div>';
echo'<div class="box5 text-center" style="display:none;">';
     include "show5.php";
echo'</div>';
echo'<div class="box6 text-center" style="display:none;">';
     include "show6.php";
echo'</div>';
echo'<div class="box7 text-center" style="display:none;">';
     include "show7.php";
echo'</div>';
echo'</div>';  
echo'<div class="modal-footer justify-content-center align-items-center">';  
echo'<ul class="pagination px-2 cursor ">';
echo'<li class="page-item"><a id="l1" class="page-link l1"> R1 </a></li>';
echo'<li class="page-item"><a id="l2" class="page-link l2" > R2 </a></li>';
echo'<li class="page-item"><a id="l3" class="page-link l3" > R3 </a></li>';
echo'<li class="page-item"><a id="l4" class="page-link l4" >1/8</a></li>';
echo'<li class="page-item"><a id="l5" class="page-link l5" >1/4</a></li>';
echo'<li class="page-item"><a id="l6" class="page-link l6" >1/2</a></li>';
echo'<li class="page-item"><a id="l7" class="page-link l7" >FINALS</a></li>';
echo'</ul>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';

}
                 
                 echo"</tbody>";
                 echo"</table>";
                 echo"</div>";
 

}

}
$conn->close();
?>    
     
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">

  <p><b>POWODZENIA</b></p>


</div>

</body>
</html>

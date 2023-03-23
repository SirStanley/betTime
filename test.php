Plik: test.php
<?php 
   session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Katar2022WC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link href="style.css" rel="stylesheet" />
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

    
  
</head>

<body>
      <?php

        require_once 'data.php'; 
        
      ?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="form">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php#form">WYLOGUJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
<?php
if(isset($_SESSION['adminlog'] )){
 echo "<span style='color:green;font-size:large;'>".$_SESSION['adminlog']."</span>"; 

}
else
{
  $_SESSION['adminerror']=" POWAŻNIE  ??! TYLKO ADMINY !!";
  header('location: index.php#form');
}
?>
    </div>
  </div>
</nav>
<div class="container">
<div class="row d-flex flex-row">
<div class="col-6">
      <form actiom="" method="POST">
        <div class="  d-flex flex-row  mt-3">
          <div class="col">
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="1a"/><img class="ps-1" src="img/flagi/ar.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="1b"/><img class="ps-1" src="img/flagi/fr.png"></div></label>  
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="2a"/><img class="ps-1" src="img/flagi/hr.png"></div></label>
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="2b"/><img class="ps-1" src="img/flagi/ma.png"></div></label> 
          </div>   
          <div class="col">
        <!--<div class="blue"><label> <input type="number" style="width: 2em" value="0" name="3a"/><img class="ps-1" src="img/flagi/fr.png"></div></label>
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="3b"/><img class="ps-1" src="img/flagi/pl.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="4a"/><img class="ps-1" src="img/flagi/an.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="4b"/><img class="ps-1" src="img/flagi/sn.png"></div></label> -->
          </div>
        </div>
          <button class="mt-3 mx-3" type=submit name="count">PRZELICZ</button>
      </form>
</div>
<div class="col-6">
      <form actiom="" method="POST">
        <div class="  d-flex flex-row  mt-3">
          <div class="col">
       <!-- <div class="green"><label> <input type="number" style="width: 2em" value="0" name="1a"/><img class="ps-1" src="img/flagi/ma.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="1b"/><img class="ps-1" src="img/flagi/pt.png"></div></label>
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="2a"/><img class="ps-1" src="img/flagi/an.png"></div></label>
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="2b"/><img class="ps-1" src="img/flagi/fr.png"></div></label>-->
          </div>
          <div class="col">
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="3a"/><img class="ps-1" src="img/flagi/pl.png"></div></label>
            <div class="blue"><label> <input type="number" style="width: 2em" value="0" name="3b"/><img class="ps-1" src="img/flagi/pl.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="4a"/><img class="ps-1" src="img/flagi/pl.png"></div></label>
            <div class="green"><label> <input type="number" style="width: 2em" value="0" name="4b"/><img class="ps-1" src="img/flagi/pl.png"></div></label>
          </div>
        </div>
          <button class="mt-3 mx-3" type=submit name="count2">PRZELICZ</button>
      </form>
</div>
<div class="justify-content-end ">
        <form action="" method="POST">
          <input class="my-2" type="number" style="width:3em" value="1" name="numOfgoal">
              <select  class="form-select my-1 " name="best"  aria-label="Default select example" style="width: 9em" required>
                        <option hidden value="">Król...</option>
                        <option value='C.RONALDO'>C.Ronaldo</option>
                        <option value='K.MBAPPE'>K.Mbappe</option>
                        <option value='L.MESSI'>L.Messi</option>
                        <option value='A.RABIOT'>A.Rabiot</option>
                        <option value='O.GIROUD'>O.Giroud</option>
                        <option value='H.KANE'>H.Kane</option>
                        <option value='NEYMAR'>Neymar</option>
                        <option value='A.KRAMARIC'>A.Kramaric</option>
                        <option value='R.LUKAKU'>R.Lukaku</option>
                        <option value='F.VALVERDE'>F.Valverde</option> 
                        <option value='R.LEWANDOWSKI'>R.Lewandowski</option>                       
                        <option value='G.BALE'>G.Bale</option>
                        <option value='RICHARLISON'>Richarlison</option>
                        <option value='K.DEBRUYNE'>K.de Bruyne</option>
                        <option value='D.VLAHOVIC'>D.Vlahovic</option>
                        <option value='VINICIUS JR.'>Vinicius Jr.</option>
                        <option value='S.MANE'>S.Mane</option>
                        <option value='D.TADIC'>D.Tadic</option>                         
                        <option value='A.MORATA'>A.Morata</option>
                        <option value='M.DEPAY'>M.Depay</option>
                        <option value='E.CAVANI'>E.Cavani</option>
                        <option value='K.HAVERTZ'>K.Havertz</option>
                        <option value='T.MULLER'>T.Muller</option>
                        <option value='L.MODRIC'>L.Modric</option>
                        <option value='E.VALENCIA'>E.Valencia</option> 
                        <option value='L.MARTINEZ'>L.Martinez</option> 
                        <option value='J.GREALISH'>J.Grealish</option>
                        <option value='R.STERLING'>R.Sterling</option> 
                        <option value='B.SAKA'>B.Saka</option>                              
                      </select>
              <button class="mt-3 mx-3" type=submit name="goaladd">PRZELICZ GOLE</button>

        </form>
<div class="mt-3">
        <form action="" method="POST">
          <input type="text" placeholder="mistrz" size="25" value='<img src="img/flagi/??.png">' name="mistrz"/>
          <button type="submit" name="enterMistrz">Podlicz Mistrza</button></br></br>
          <input type="text" placeholder="krol" size="5" name="krol"/>
          <button type="submit" name="enterKrol">Podlicz Króla</button>
        </form>
</div>
<?php
if(isset($_POST['enterMistrz'])){
  $mistrz=$_POST['mistrz'];
  $pol=mysqli_connect($host, $user, $pass, $baza)or die("brak conectu");
  $pyt="UPDATE users SET points=points+5 WHERE winner = '$mistrz'";
  if(mysqli_query($pol, $pyt)){
    echo"dodano punkty za $mistrz";
  }
  else{
    echo"Nie dodano nic";
  }
  mysqli_close($pol);
}
if(isset($_POST['enterKrol'])){
  $krol=$_POST['krol'];
  $pol=mysqli_connect($host, $user, $pass, $baza)or die("brak conectu");
  $pyt="UPDATE users SET points=points+5 WHERE topplayer = '$krol'";
  if(mysqli_query($pol, $pyt)){
    echo"dodano punkty za $krol";
  }
  else{
    echo"Nie dodano nic";
  }
  mysqli_close($pol);
}

if(isset($_POST['goaladd'])){

  $goalnum=$_POST['numOfgoal'];
  $bestplayer=$_POST['best'];
  $pol=mysqli_connect($host, $user, $pass, $baza)or die("brak conectu");
  $zapyt="UPDATE topscorers set goals=goals + $goalnum  WHERE `name` = '$bestplayer'";

  if(mysqli_query($pol, $zapyt)){
    echo '<br><span style="color:green;">Dodano do tabeli '.$bestplayer.' plus '.$goalnum.' gole.</span>';
  }
  else{
    echo"<br>nic nie dodano....";
  }
mysqli_close($pol);
}


?>
</div>
</div>
</div>


<?php

if(isset($_POST['count'])){

$connect=mysqli_connect($host, $user, $pass, $baza) or die ("great error");
   $myask="SELECT * FROM finals ";
   $myquery=mysqli_query($connect, $myask);
   $numrows=mysqli_num_rows($myquery);
if($suma=mysqli_query($connect, $myask)){

$a1=$_POST['1a'];  
$b1=$_POST['1b']; 
$a2=$_POST['2a'];
$b2=$_POST['2b'];
/*$a3=$_POST['3a'];
$b3=$_POST['3b'];
$a4=$_POST['4a'];
$b4=$_POST['4b'];*/

/*1 point for show who win or equal game, 2 points extra for properly number of goals in the game plus 1 perfect for that.
(case where more than one player will have  same number of points. then we take who have more perfect bets )*/
$punkty=0;
$perfect=0;
$ile  =0;


while ($line=mysqli_fetch_assoc($suma)) {


if(($a1>$b1 && $line['1a']>$line['1b'])||($a1<$b1 && $line['1a']<$line['1b'])||($a1==$b1 && $line['1a']==$line['1b'])){
$punkty+=1;
}
if($a1==$line['1a'] && $b1==$line['1b']){
$punkty+=2;
$perfect+=1;
}


if(($a2>$b2 && $line['2a']>$line['2b'])||($a2<$b2 && $line['2a']<$line['2b'])||($a2==$b2 && $line['2a']==$line['2b'])){
$punkty+=1;
}
if($a2==$line['2a'] && $b2==$line['2b']){
$punkty+=2;
$perfect+=1;
}




$myname=$line['kto'];

$query="UPDATE users SET points=points + $punkty, perfect=perfect + $perfect where haslo='$myname'";
if($wynik2=mysqli_query($connect,$query)){

        $ile+=1;
        $punkty=0;
        $perfect=0;
        
      }
      else{
        echo"Nic nie dodano";
      }
      
$_SESSION['ilejest']= "dodano rekordów $ile do bazy .";
}
  


}
}

echo"<br>";
if(isset($_SESSION['ilejest'])){
  echo $_SESSION['ilejest'];
  unset($_SESSION['ilejest']);
}
?>
<?php

if(isset($_POST['count2'])){

$connect=mysqli_connect($host, $user, $pass, $baza) or die ("great error");
   $myask="SELECT * FROM finals14 ";
   $myquery=mysqli_query($connect, $myask);
   $numrows=mysqli_num_rows($myquery);
if($suma=mysqli_query($connect, $myask)){

/*$a1=$_POST['1a'];  
$b1=$_POST['1b'];
$a2=$_POST['2a'];
$b2=$_POST['2b'];*/
$a3=$_POST['3a'];
$b3=$_POST['3b'];
$a4=$_POST['4a'];
$b4=$_POST['4b'];

/*1 point for show who win or equal game, 2 points extra for properly number of goals in the game plus 1 perfect for that.
(case where more than one player will have  same number of points. then we take who have more perfect bets )*/
$punkty=0;
$perfect=0;
$ile  =0;


while ($line=mysqli_fetch_assoc($suma)) {




if(($a3>$b3 && $line['3a']>$line['3b'])||($a3<$b3 && $line['3a']<$line['3b'])||($a3==$b3 && $line['3a']==$line['3b'])){
$punkty+=1;
}
if($a3==$line['3a'] && $b3==$line['3b']){
$punkty+=2;
$perfect+=1;
}


if(($a4>$b4 && $line['4a']>$line['4b'])||($a4<$b4 && $line['4a']<$line['4b'])||($a4==$b4 && $line['4a']==$line['4b'])){
$punkty+=1;
}
if($a4==$line['4a'] && $b4==$line['4b']){
$punkty+=2;
$perfect+=1;
}



$myname=$line['kto'];

$query="UPDATE users SET points=points + $punkty, perfect=perfect + $perfect where haslo='$myname'";
if($wynik2=mysqli_query($connect,$query)){

        $ile+=1;
        $punkty=0;
        $perfect=0;
        
      }
      else{
        echo"Nic nie dodano";
      }
      
$_SESSION['ilejest']= "dodano rekordów $ile do bazy .";
}
  


}
}

echo"<br>";
if(isset($_SESSION['ilejest'])){
  echo $_SESSION['ilejest'];
  unset($_SESSION['ilejest']);
}
?>
<div>
<?php
$connect2=mysqli_connect($host, $user, $pass, $baza) or die ("great error");
$tablesql="SELECT * FROM users order by points DESC, perfect DESC, nick ASC";
$add=mysqli_query($connect2, $tablesql)or die ("fatal error sql");
if(mysqli_num_rows($add)>=0)
{
  

echo'<table class="table table-hover mt-5"">';
  echo'<thead class="thead-dark">';
   echo'<tr class="text-center">';
     echo'<th scope="col">NAME</th>';
      echo'<th scope="col">POINTS</th>';
      echo'<th scope="col">PERFECT</th>';
    echo'</tr>';
  echo'</thead>';
  echo'<tbody>';


while($row=mysqli_fetch_assoc($add)){
echo'<tr class="text-center"><td>'.$row['nick'].'</td><td>'.$row['points'].'</td><td>'.$row['perfect'].'</td></tr>';
}

echo'</tbody>';
echo'</table>';


}
else{
  echo"nie dało rady";
  
}
mysqli_close($connect2);

?>
</div>


</div>
</div>





</body>
</html>


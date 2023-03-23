Plik: show2.php
<?php 





require_once 'data.php';

$connect2=mysqli_connect($host, $user, $pass, $baza) or die ("great error");
$myask2='select * from daytwo where kto="'.$row['haslo'].'" order by ID DESC LIMIT 1';
if($suma2=mysqli_query($connect2, $myask2)){
    if(mysqli_num_rows($suma2) >0){

    while ($line2=mysqli_fetch_assoc($suma2)) 
    {
      
echo'<div class="d-flex flex-row justify-content-center">';
echo'<div class="col-4">';
echo'<div><h2>2ND ROUND</h2></div>'; 
echo'<div><img src="img/'.$row['topplayer'].'big.png"></div>';
echo'</div>';
echo'<div class=" col-4 py-2">';
echo'<div class=""><img class="px-1" src="img/flagi/wls.png">'.$line2['1a'].' : '.$line2['1b'].'<img class="px-1" src="img/flagi/ir.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/qa.png">'.$line2['2a'].' : '.$line2['2b'].'<img class="px-1" src="img/flagi/sn.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/nl.png">'.$line2['3a'].' : '.$line2['3b'].'<img class="px-1" src="img/flagi/ec.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/an.png">'.$line2['4a'].' : '.$line2['4b'].'<img class="px-1" src="img/flagi/us.png"></div>';    
echo'<div class=""><img class="px-1" src="img/flagi/tn.png">'.$line2['5a'].' : '.$line2['5b'].'<img class="px-1" src="img/flagi/au.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/pl.png">'.$line2['6a'].' : '.$line2['6b'].'<img class="px-1" src="img/flagi/sa.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/fr.png">'.$line2['7a'].' : '.$line2['7b'].'<img class="px-1" src="img/flagi/dk.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/ar.png">'.$line2['8a'].' : '.$line2['8b'].'<img class="px-1" src="img/flagi/mx.png"></div>'; 
echo'</div>';
echo'<div class="col-4 py-2">';
echo'<div class=""><img class="px-1" src="img/flagi/jp.png">'.$line2['9a'].' : '.$line2['9b'].'<img class="px-1" src="img/flagi/cr.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/be.png">'.$line2['10a'].' : '.$line2['10b'].'<img class="px-1" src="img/flagi/ma.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/hr.png">'.$line2['11a'].' : '.$line2['11b'].'<img class="px-1" src="img/flagi/ca.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/es.png">'.$line2['12a'].' : '.$line2['12b'].'<img class="px-1" src="img/flagi/de.png"></div>';    
echo'<div class=""><img class="px-1" src="img/flagi/cm.png">'.$line2['13a'].' : '.$line2['13b'].'<img class="px-1" src="img/flagi/rs.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/kr.png">'.$line2['14a'].' : '.$line2['14b'].'<img class="px-1" src="img/flagi/gh.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/br.png">'.$line2['15a'].' : '.$line2['15b'].'<img class="px-1" src="img/flagi/ch.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/pt.png">'.$line2['16a'].' : '.$line2['16b'].'<img class="px-1" src="img/flagi/uy.png"></div>';  
echo'</div>';
echo'</div>';
echo' <div class="justify-items-end justify-items-sm-center my-3">';
echo'<img src="img/finish.png">';
echo'</div>';

}
}
else{
    echo'<div class="d-flex flex-row justify-content-center">';
        echo'<div>';
            echo'<div class="px-1"><h2>2ND  ROUND</h2></div>'; 
            echo'<div><img src="img/'.$row['topplayer'].'big.png"></div>';
        echo'</div>';
        echo'<div class="align-items-center p-5">';
            echo'<h3>OBSTAW MECZE W ZAKŁADCE <br><i><b><a class="changebet" href="bets.php#bet"><i>BETS</i></a></b></i></h3>';
        echo'</div>';
    echo'</div>';
}
}



?>

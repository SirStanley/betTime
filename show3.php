Plik: show3.php
<?php 





require_once 'data.php';

$connect=mysqli_connect($host, $user, $pass, $baza) or die ("great error");
$myask='select * from daythree where kto="'.$row['haslo'].'" order by ID DESC LIMIT 1';
if($suma=mysqli_query($connect, $myask)){
if(mysqli_num_rows($suma) >0){
    while ($line=mysqli_fetch_assoc($suma)) 
    {
      
echo'<div class="d-flex flex-row justify-content-center">';
echo'<div class="col-4">';
echo'<div><h2>3RD  ROUND</h2></div>'; 
echo'<div><img src="img/'.$row['topplayer'].'big.png"></div>';
echo'</div>'; 
echo'<div class="col-4 py-2">';
echo'<div class=""><img class="px-1" src="img/flagi/ec.png">'.$line['1a'].' : '.$line['1b'].'<img class="px-1" src="img/flagi/sn.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/nl.png">'.$line['2a'].' : '.$line['2b'].'<img class="px-1" src="img/flagi/qa.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/ir.png">'.$line['3a'].' : '.$line['3b'].'<img class="px-1" src="img/flagi/us.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/wls.png">'.$line['4a'].' : '.$line['4b'].'<img class="px-1" src="img/flagi/an.png"></div>';    
echo'<div class=""><img class="px-1" src="img/flagi/tn.png">'.$line['5a'].' : '.$line['5b'].'<img class="px-1" src="img/flagi/fr.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/au.png">'.$line['6a'].' : '.$line['6b'].'<img class="px-1" src="img/flagi/dk.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/pl.png">'.$line['7a'].' : '.$line['7b'].'<img class="px-1" src="img/flagi/ar.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/sa.png">'.$line['8a'].' : '.$line['8b'].'<img class="px-1" src="img/flagi/mx.png"></div>'; 
echo'</div>';
echo'<div class="col-4 py-2">';
echo'<div class=""><img class="px-1" src="img/flagi/hr.png">'.$line['9a'].' : '.$line['9b'].'<img class="px-1" src="img/flagi/be.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/ca.png">'.$line['10a'].' : '.$line['10b'].'<img class="px-1" src="img/flagi/ma.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/jp.png">'.$line['11a'].' : '.$line['11b'].'<img class="px-1" src="img/flagi/es.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/cr.png">'.$line['12a'].' : '.$line['12b'].'<img class="px-1" src="img/flagi/de.png"></div>';    
echo'<div class=""><img class="px-1" src="img/flagi/kr.png">'.$line['13a'].' : '.$line['13b'].'<img class="px-1" src="img/flagi/pt.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/gh.png">'.$line['14a'].' : '.$line['14b'].'<img class="px-1" src="img/flagi/uy.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/rs.png">'.$line['15a'].' : '.$line['15b'].'<img class="px-1" src="img/flagi/ch.png"></div>';
echo'<div class=""><img class="px-1" src="img/flagi/cm.png">'.$line['16a'].' : '.$line['16b'].'<img class="px-1" src="img/flagi/br.png"></div>';  
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
            echo'<div class="px-1"><h2>3RD  ROUND</h2></div>'; 
            echo'<div><img src="img/'.$row['topplayer'].'big.png"></div>';
        echo'</div>';
        echo'<div class="align-items-center p-5">';
            echo'<h3>OBSTAW MECZE W ZAKŁADCE <br><i><b><a class="changebet" href="bets.php#bet"><i>BETS</i></a></b></i></h3>';
        echo'</div>';
    echo'</div>';
}
}



?>

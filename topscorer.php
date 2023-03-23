Plik: topscorer.php
 <?php

     
     
$conn2 = new mysqli ($host, $user, $pass, $baza);

if ($conn2-> connect_error) {
die ( "Połączenie nie powiodło się:" );
}
else{
   

$result2=$conn2->query("select * from topscorers order by goals DESC, name ASC limit 6");

if ($result2-> num_rows >= 0) {

                 echo'<div class="table-responsive-sm my-2 ">';
                 echo'<table class="table table-borderless table-sm table-hover pb-5 ">';
                 echo"<thead>";
                 echo'<tr>';
                 echo'<h2  class="text-center py-2"><b>BEST TOP 6</b></h2>';
                 echo"</tr>";
                 echo"</thead>";
                 echo"<tbody>";
                 

while ($row2 = $result2-> FETCH_ASSOC ()) 

{
echo '<tr class=" px-2"><td class=" ps-3 ">'.$row2['image'].'</td><td class="text-start pt-4">'.$row2['name'].'</td><td class="text-center pt-4" ><b>'.$row2['goals'].'</b></td></tr>';

}
                 
                 echo"</tbody>";
                 echo"</table>";
                 echo"</div>";
 

}

}
$conn2->close();
?>     

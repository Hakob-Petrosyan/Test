<?php
$newDivs="";
$digit=1;
  
   for ($i=0; $i < 5; $i++) { 
      $divs="Товар".$digit;
      $newDivs .= "<div> ".$divs."</div>";
      $digit++;
   }
      echo $newDivs;
  ?>


<!-- "Товар11", "Товар12","Товар13", -->
<?php
$memory ="";
$comparaison = 0;
$Tableau = array(9, 5, 6, 3, 2, 1, 4, 8, 7);
echo "Donnée : ";
for($i = 0; $i < count($Tableau); $i++) {
 $memory++;
 $comparaison++;
 echo  $Tableau[$i].", ";
 
}
 
for($I = count($Tableau) - 2;$I >= 0; $I--) {
 $comparaison++;
 for($J = 0; $J <= $I; $J++) {
  $comparaison++;
  if($Tableau[$J + 1] < $Tableau[$J]) {
   $comparaison++;
   $t = $Tableau[$J + 1];
   $Tableau[$J + 1] = $Tableau[$J];
   $Tableau[$J] = $t;
   $memory+= 6;
   
  }
 }
}

echo "Affichage : ";
for($j = 0; $j < count($Tableau); $j++) {
  $comparaison++;
  $memory++;
  echo $Tableau[$j].", ";
}
echo "Mémoire : $memory";
echo "Comparaison : $comparaison";
?>
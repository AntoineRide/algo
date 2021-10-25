<?php
$comparaison = 0;
$memory = 0;
// Je défini un tableau
echo PHP_EOL;
$tableau = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
echo "Donnée : ";
echo implode(",", $tableau);

for ($I = count($tableau) - 2; $I >= 0; $I--) {
    for ($J = 0; $J <= $I; $J++) {
        $data = $tableau[$J];
        $tbl = $tableau[$J + 1];
        if ($tbl < $data) {
            $tableau[$J + 1] = $data;
            $tableau[$J] = $tbl;
            $memory += 2;
        }
        $memory += 2;
        $comparaison++;
    }
}
echo PHP_EOL;
echo "Affichage : ";
echo implode(",", $tableau);

echo PHP_EOL;
echo PHP_EOL;
echo "Mémoire : $memory";
echo PHP_EOL;
echo "Comparaison : $comparaison";

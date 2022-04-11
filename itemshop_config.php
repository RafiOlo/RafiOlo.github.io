<?php


#Ponieżej wpisz atrybut przekierowania np: https:crystalcode.xyz
$itemshop = '********';



#ta sekcja cie nie interesuje!!!
$redirect = true;
if($redirect && !empty($itemshop)) {
    header('Location: ' . $itemshop);
    exit;
}
echo "Zly link";
?>
#ta sekcja cie nie interesuje!!!

<?php


#Ponieżej wpisz atrybut przekierowania np: https:crystalcode.xyz
$regulamin = '********';



#ta sekcja cie nie interesuje!!!
$redirect = true;
if($redirect && !empty($regulamin)) {
    header('Location: ' . $regulamin);
    exit;
}
echo "Zly link";
?>
#ta sekcja cie nie interesuje!!!

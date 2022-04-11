<?php


#Ponieżej wpisz atrybut przekierowania np: https:crystalcode.xyz
$discord = 'https://discord.io/piniadzepl';



#ta sekcja cie nie interesuje!!!
$redirect = true;
if($redirect && !empty($discord)) {
    header('Location: ' . $discord);
    exit;
}
echo "Zly link";
?>
#ta sekcja cie nie interesuje!!!


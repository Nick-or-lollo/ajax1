<?php

$a = array(1,2,3,4,5,6,6,7,8,9,10,11,12,13,14,14,12,11,12,10,3,5,6,7,6,4,6,4,2,2,1,1,3,2,1,2,1,1,22,4,1,2,3,4,5,6,7,8,2,1,3,1,23,4,5,6,4,3,11,12,1,4,3,2,4,5,6,4,3,7,2,3,10,2,3,43,2,1,1,100,120,40,60,70,90,120,230,100,150,170,180,190,60,80,100,120,140,150,160,190,200,120,100,100,45,23,24,34,35,36,78,90,1,2,3,4,5,60,80,150,190,200,178,172,122,133,140);
$q = $_GET["stringa"];
$numero = (int)$q;
$response = "";
$contatore=0;
$risposta = "";

for($i = 0; $i < count($a); $i++){
  if ($numero>=$a[$i]){
      $contatore++;               //contatore delle posizioni in classifica
  }
}
$percentuale=($contatore*100)/count($a); //percentuale di giocatori con punteggio minore
/*
risposta in json
  |
  V */

$risposta='{"totale":'.(string)count($a).',"posizione":'.(string)(count($a) - $contatore).',"percentuale":'.(string)$percentuale.',"clickpersec":'.(string)($numero/10).',"clicktotali":'.(string)$numero .'}';
echo $risposta;
?>

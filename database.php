<?php 
//Prendo il contenuto di un file json sotto forma di stringa
$str = file_get_contents('./data.json');
// echo $str;

// Tramite la funzione json_decode, decodifico la stringa di datai di json e la salvo in php sotto forma di un array di contenuti(grazie al secondo parametro impostato come true)
$db = json_decode($str,true);

// var_dump($data)

?>

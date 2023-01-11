<?php
if(!empty($_GET['url'])){
    $url = 'http://'.$_GET['url'];
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    $paxina = curl_exec($c);
    curl_close($c);
    if($paxina === false) exit('URL no encontrada!');
    else echo $paxina;
    }
    else exit('URL no indicada!');
    ?>
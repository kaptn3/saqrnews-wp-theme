<?php
    $url = file_get_contents('http://www.elabraj.net/ar/horoscope/daily/8');
    $div = '#\<div class="horoscope-daily-text"\>(.+?)\<\/div\>#s';
    preg_match_all($div, $url, $resul);
    #print_r($resul);
    var_dump($resul);
?>
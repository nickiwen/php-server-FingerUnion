<?php
    $url = "https://m.qyer.com/home/api/biu_list?ajaxID=5cd8d69ef1d508c32233475c&page=".$_GET['page'];
    $ch = curl_init();
    $timeout = 5;
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $file_contents = curl_exec($ch);
    curl_close($ch);
    echo $file_contents;
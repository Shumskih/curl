<?php

const URL = 'https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D1%80%D0%BE%D0%B7%D0%BE%D0%B2,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87';


echo read(URL);

function read($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    // откуда пришли на эту страницу
    curl_setopt($ch, CURLOPT_REFERER, $url);
    //запрещаем делать запрос с помощью POST и соответственно разрешаем с помощью GET
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (Windows; U; Windows NT 5.0; En; rv:1.8.0.2) Gecko/20070306 Firefox/1.0.0.4");

    $result = curl_exec($ch);

    curl_close($ch);

    return $result;
}
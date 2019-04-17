<?php

$city=$_GET['city'];

$city=str_replace(" ","",$city);

$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('table-description-content"><span class="phrase">(.*?)<\/span>/i', $contents, $matches);

echo $matches[1];


?>

<?php
session_start();

@$city = $_GET['city'] ? $_GET['city'] : 'sao_paulo';
$_SESSION['chosenCity'] = $city;

@$_cityName = ucwords(preg_replace('/(_)/', ' ', $city));
@$_cityInputName = strtoupper(preg_replace('/(_)/', ' ', $city));
?>
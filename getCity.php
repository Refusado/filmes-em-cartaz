<?php
@$city = $_GET['city'] ? $_GET['city'] : 'sao_paulo';
@$cityName = ucwords(preg_replace('/(_)/', ' ', $city));
?>
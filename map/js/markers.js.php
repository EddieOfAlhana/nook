<?php
header('Content-type: application/javascript');
require_once(__DIR__. '/../../vendor/autoload.php');
$countryWhiteList = ['hu', 'cr'];
$typeWhiteList = ['stake', 'zone', 'estate', 'nature'];

if(isset($_GET['button1id'])) {
    $type = isset($_GET['type'])?$_GET['type']:[];
    $country = isset($_GET['country'])?$_GET['country']:[];
} else {
    $type = $typeWhiteList;
    $country = $countryWhiteList;
}
$type = array_intersect($type, $typeWhiteList);
$country = array_intersect($country, $countryWhiteList);

$db = Db::getInstance();
$pois = $db->getStakes($type, $country);
echo 'markers=', json_encode($pois);
//markers = [[45.760652, 18.273797]];

<?php
header('Content-type: application/javascript');
require_once(__DIR__. '/../../vendor/autoload.php');
$db = Db::getInstance();
$pois = $db->getZones();
echo 'markers_zone=', json_encode($pois);
//markers = [[45.760652, 18.273797]];

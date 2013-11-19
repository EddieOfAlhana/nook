<?php
require_once(__DIR__. '/../../vendor/autoload.php');
$db = Db::getInstance();
$pois = $db->getStakes();
echo 'markers=', json_encode($pois);
//markers = [[45.760652, 18.273797]];

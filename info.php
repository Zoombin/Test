<?php

require_once ('./submodules/php-mysqli-database-class/MysqliDb.php');

$ip = $_SERVER['SERVER_ADDR'];
if ($ip == '112.124.98.9') {
	$db = new MysqliDb ('localhost:3306', 'root', 'Dsh12345', 'trafficpolice');
} else {
	$db = new MysqliDb ('localhost:3306', 'root', 'Dsh12345', 'trafficpolice');
}

var_dump($ip);
$users = $db->get('user');
var_dump($users);
if ($db->count > 0) {
    foreach ($users as $user) { 
        // var_dump($user);
    }
}

?>
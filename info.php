<?php

require_once ('./submodules/php-mysqli-database-class/MysqliDb.php');

// echo phpinfo();

$ip = $_SERVER['SERVER_ADDR'];
if ($ip == '112.124.98.9') {
	$db = new MysqliDb ('localhost', 'root', 'Dsh12345', 'trafficpolice');
} else {
	$db = new MysqliDb ('localhost', 'root', 'Dsh12345', 'trafficpolice');
}

// var_dump($db);

$user = $db->getOne('user');
var_dump($user);
// var_dump("expression");

// var_dump("hofhaohfoahf");
// if ($db->count > 0) {
//     foreach ($users as $user) { 
//         //var_dump($user);
//     }
// }

?>
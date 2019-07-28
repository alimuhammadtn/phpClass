<?php
require_once "./class/Db.php"; //include PHP database CLass
//fetch
$r = Db::fetch("test",array("password" => "123123"),array("="));
//display result
print_r($r);

?>
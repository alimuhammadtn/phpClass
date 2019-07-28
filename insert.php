<?php

require_once "./class/Db.php"; //include PHP database CLass
//insert in user table

$username = 'John';

$password = '456456';

Db::insert("test",array(
    "username" => $username,
    "password" => $password
));

?>
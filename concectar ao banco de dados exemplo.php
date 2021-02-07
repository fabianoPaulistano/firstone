<?php

$mysqli = new mysqli('127.0.0.1', 'fabiano', 'peruibe1998', 'exemplo');

if ($mysqli->connect_errno) {
       echo "Sorry, this website is experiencing problems.";
}
?>
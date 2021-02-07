<?php

$mysqli = new mysqli('127.0.0.1', 'fabiano', 'peruibe1998', 'exemplo');

if ($mysqli->connect_errno) {
       echo "Sorry, this website is experiencing problems.";
}

$sql = "SELECT id FROM exemplo";
if (!$result = $mysqli->query($sql)) {
    // Oh no! The query failed. 
    echo "Sorry, the website is experiencing problems.";

    if ($result->num_rows === 0) {
        // Oh, no rows! Sometimes that's expected and okay, sometimes
        // it is not. You decide. In this case, maybe actor_id was too
        // large? 
        echo "We could not find a match for ID $aid, sorry about that. Please try again.";
        exit;

        $nome = $result->fetch_assoc();
echo "Sometimes I see " . $nome['nome'] . " " . " on TV.";
    }
?>  
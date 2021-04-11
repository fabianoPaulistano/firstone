<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=primeiro', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = 'Rio Grande do Sul'; 
   
    $data = $conn->query('SELECT * FROM estados WHERE nome = ' . $conn->quote($name));

    foreach($data as $row) {
        print_r($row);
    }

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>


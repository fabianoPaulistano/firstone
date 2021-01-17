<?php
$sqlEstado = 'SELECT * FROM estado ORDER BY nome ASC';
$resEstado = $conexao->prepare($sqlEstado);
$resEstado->execute();
$estados = $resEstado->fetchAll();
?>

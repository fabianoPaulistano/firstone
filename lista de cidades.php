<?php
// Uma forma de obter $_POST['estado'] mais segura
$codEstado = filter_input(INPUT_POST, 'estado', FILTER_VALIDATE_INT);

$sqlCidade = 'SELECT * FROM cidade WHERE cod_estado = :codestado ORDER BY nome ASC';
$resCidade = $conexao->prepare($sqlCidade);
$resCidade->execute(array(
    ':codestado' => $codEstado
));
$cidades = $resCidade->fetchAll();
?>

<?php foreach ($cidades as $cidade) { ?>
    <option value="<?php echo $cidade['id'] ?>"><?php echo $cidade['nome'] ?></option>
<?php } ?>

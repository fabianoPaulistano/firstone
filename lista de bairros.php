<?php
// Uma forma de obter $_POST['cidade'] mais segura
$codCidade = filter_input(INPUT_POST, 'cidade', FILTER_VALIDATE_INT);

$sqlBairro = 'SELECT * FROM bairro WHERE cod_cidade = :codcidade ORDER BY nome ASC';
$resBairro = $conexao->prepare($sqlBairro);
$resBairro->execute(array(
    ':codcidade' => $codCidade
));
$bairros = $resBairro->fetchAll();
?>

<?php foreach ($bairros as $bairro) { ?>
    <option value="<?php echo $bairro['id'] ?>"><?php echo $bairro['nome'] ?></option>
<?php 
} 
?>
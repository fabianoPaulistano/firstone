<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "root"; 
$password = ""; 
$database = "primeiro"; 

# O hostname deve ser sempre localhost 
$servername = "localhost"; 

# Conecta com o servidor de banco de dados 
$conn = mysqli_connect($servername, $user, '', $database);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

# Seleciona o banco de dados 
$query = "SELECT * FROM estados";

$result = mysqli_query($conn, $query);

$result2 = mysqli_query($conn, $query);
$options = "";
    while ($row2 = mysqli_fetch_array($result2, MYSQLI_BOTH))
    {
        $options = $options . "<option> $row2[1] </option>";

    }


?>

<html>
<head>
<title> Preencher dinamicamente select </title>
<meta charset = "UTF-8">
</head>
<body>

<!-- primeiro método -->
<select>  

# Exibe os registros na tela 
<?php while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)):; ?>
    <option value = "<?php echo $row [0];?>" > <?php echo $row[2]; ?> </option>
    <?php endwhile; ?>
   
</select>   

<!-- segundo método -->
<select> 
    <?php echo $options; ?> 
</select>    

   <!-- mysqli_close($conn); -->
   
</body>
</html>   

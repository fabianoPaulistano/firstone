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
$result = mysqli_query($conn, "SELECT * FROM estados", MYSQLI_USE_RESULT);

echo "<select>";  

# Exibe os registros na tela 
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
    { 
//$array_estados = $row["id"] . " " . $row["nome"] . " " . $row["uf"] ;
        
       
        foreach($row as $cc => $estado) 
        {
         echo "<option name = 'estado' value = 'estado'> $estado </option>";
        }  
             
        
    }
    echo "</select>";    
?>
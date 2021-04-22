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
$query2 = "SELECT * FROM cidades";

$result = mysqli_query($conn, $query);

$result2 = mysqli_query($conn, $query);
$options = "";
    while ($row2 = mysqli_fetch_array($result2, MYSQLI_BOTH))
    {
        $options = $options . '<option value = "'. $row2[0] .'">' . $row2[1] .'</option>';
    }

$result3 = mysqli_query($conn, $query2);
$options2 = ""; 
    while ($row3 = mysqli_fetch_array($result3, MYSQLI_BOTH))
    {
        $options2 = $options2 . "<option value ='". $row3[0] . "'>" . $row3[1] . "</option>";
    }

?>

<html>
<head>
<title> Preencher dinamicamente select </title>
<meta charset = "UTF-8">

<script type = "text/javascript">

window.onload = function() {
  var uf = document.getElementById("uf");
  var estado = document.getElementById("estado");
  var cidade = document.getElementById("cidade");
}

function val() {
   var combo_uf = document.getElementById("estado");
    for (i= 0, i < combo_uf.length, i = i + 1)
    console.log(combo_uf.options[i]);
}
}



</script> 


</head>
<body>

<!-- primeiro método PHP -->
<label><b> UF </b></label>
<select name = "uf" id = "uf" onchange = "val()">  
<option value = "" disabled selected hidden> Selecione a UF </option>

# Exibe os registros na tela 
<?php while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)):; ?>
    <option value = "<?php echo $row [0];?>" > <?php echo $row[2]; ?> </option>
    <?php endwhile; ?>
   
</select>   </br> </br>

<!-- segundo método PHP -->

<label><b> Estado </b></label>
<select name ="estado" id = "estado"> 
    <?php echo $options; ?> 
</select>  </br></br> 

<label><b> Cidade </b></label>
<select name ="cidade" id = "cidade">
    <?php echo $options2; ?> 
</select> 



   <!-- mysqli_close($conn); -->
   
</body>
</html>   

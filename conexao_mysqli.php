<?php
$servername = "localhost";
$database = "primeiro";
$username = "";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, '', '');
// Check connection

$query_nome_estado  = "SELECT nome FROM estados";
$result = mysqli_query($conn, $query_nome_estado);
$teste = mysqli_num_rows ($result) or die(mysql_error());
$row    = mysqli_fetch_assoc($result);
//$selectedOption = $row['nome'];

echo "<select>";
	foreach($row as $estado) 
	{
	  echo "<option name='$$estado'>$$estado</option>";
	}
	echo "</select>";







/* if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
*/

?>
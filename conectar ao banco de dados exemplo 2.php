<?
   // arquivo que contera a conexao com o banco	
   require_once('conexao.php');
 
   print ("<select id='estado' name='estado'>");
   $query = "SELECT sigla, descricao FROM estados ORDER BY descricao";
   $result = mysql_query($query);
   while ($rows = mysql_fetch_array($result)){
     print("<option value='$rows[sigla]'");
     print(">$rows[descricao]");
   }
   print ("</select>");
?>

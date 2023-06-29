<?php 
$user = "id19153561_matheus"; 
$password = "yTi+^C0qI-f4Ou_p"; 
$database = "id19153561_bdlink"; 
$hostname = "localhost"; 

$conexao = mysqli_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' ); 

mysqli_select_db($conexao, $database ) or die( 'Erro na seleção do banco' );

$query = "UPDATE link SET link_atual ='" . $_POST["link"] . "';"; 
$result_query = mysqli_query($conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error($conexao) );

echo "<script> alert('Feitooooooo'); </script>";

?>
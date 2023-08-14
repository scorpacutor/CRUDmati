<?php 

$id=$_GET["id"]; 





$servername="localhost";
$username="root";
$password="" ;
$database="mati";


$connection = new mysqli($servername,$username,$password, $database );


$sql="DELETE FROM usuario WHERE id=$id";

$connection->query($sql);  




header("location:/MATI/index.php");
exit;

?>
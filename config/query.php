<?php
if(isset($_GET['enviar'])) {
$busqueda = $_GET['busqueda'];
$consulta = $con->query("SELECT * FROM product WHERE id LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()){
  echo $row['id'].'<br>';

}
}
?>
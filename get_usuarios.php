<?php

$con=new mysqli("localhost","root","","iti7");

$st=$con->prepare("select * from usuario where usuario_id=?");
$st->bind_param("i", $_GET["usuario_id"]);

$st->execute();
$rs=$st->get_result();

$arr =array();

while($row=$rs->fetch_assoc()) {
    array_push($arr, $row);  
}

echo json_encode($arr);

?>
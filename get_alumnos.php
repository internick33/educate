<?php

$con=new mysqli("localhost","root","","iti7");

$st=$con->prepare("select * from alumno");

//$st->bind_param("s", $_GET["category"]);

$st->execute();
$rs=$st->get_result();

$arr =array();

while($row=$rs->fetch_assoc()) {
    array_push($arr, $row);  
}

echo json_encode($arr);

?>
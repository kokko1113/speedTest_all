<?php
    $num=json_decode(file_get_contents("php://input"));
    $data=json_decode(file_get_contents("./data.json"));
    $res=array_slice($data,$num->n*10,10);
    echo json_encode($res);
    
?>

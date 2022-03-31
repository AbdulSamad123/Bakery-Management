<?php
include "connection.php";
$obj=new functions();
$obj->con();
    include_once'connection.php';

    $id = $_GET["id"];
    $select = $pdo->prepare("SELECT * FROM stock WHERE stock_id = :ppid ");
    $select->bindParam(":ppid", $id);
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);
    $response=$row;
    header('Content-Type: application/json');
    echo json_encode($response);
?>
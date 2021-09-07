<?php

include 'db_conn.php';

$Drug = $_POST['drug'];
$stmt = $conn->prepare("SELECT id,Drug,med_name,med_price FROM medicine where Drug =?");
$stmt->bind_param("s", $Drug);
$stmt->bind_result($id,$Drug,$med_name,$med_price);

if ($stmt->execute())
{
    while($stmt->fetch())
    {
        $output[] = array("id"=>$id,"Drug"=>$Drug,"med_name"=>$med_name,"med_price"=>$med_price);
    }
}
echo json_encode($output);











?>
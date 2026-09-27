<?php
include 'db.php';
header("Content-type=text/csv");
header("Content-disposition:attachment;filename=users.csv");
$output=fopen("php://output","w");
fputcsv($output,array("p_id","p_name","category","price","quantity","brand","description"));
$result=$conn->query("select * from products");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}
?>
<?php

$sever="localhost";
$username="root";
$password="";
$dbname="007";

$connect = new mysqli($sever,$username,$password,$dbname);
if($connect->connect_error){
    die("ไม่สามาถรจติดต่อฐานข้อมูลได้".$connect->connect_error);
}
// else{
   // echo "ติดต่อฐานข้อมูลสำเร็จ";
   
// }

?>
<?php 
try{
$dsn='mysql:host=localhost;dbname=stanford';
$user='root';
$pass='';
$connect=new PDO($dsn,$user,$pass);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOECxeption $e){
return 'failed'.$e->getMessage();
}
?>
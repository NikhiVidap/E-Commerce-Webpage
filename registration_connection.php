<?php 
$servername='localhost';
$username='root';
$pass='';
$dbname='ecommerce';

try{
    $connect=new mysqli($servername,$username,$pass,$dbname);
$db=new PDO('mysql:host=localhost;dbname='.$dbname,$username,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    echo"error in connection". $e->getmessage();
}
/*
try{
    $connect=new mysqli($servername,$username,$pass,$dbname);

    echo"  registration connection success","<br>";
}
catch(PDOException $e)
{
    echo"error in connection". $e->getMessage();
}*/
?>


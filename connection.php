<?php

$hostDB = 'ec2-34-238-37-113.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd70b1r4q9k44no';
$userDB = 'nsxdzwytjjphzh';
$pwDB = 'cbf7aac9975151b7574d8483c3bdee6fb3c4550141d131cf5dfff3f1d3c10d59';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>

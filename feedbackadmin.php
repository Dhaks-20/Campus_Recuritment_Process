<?php
$host='localhost';
$user='root';
$pass='';
$db='feedback';

//create connection
$conn=new mysqli($host,$user,$pass,$db);


$ab=$_GET["t1"];
$cd=$_GET["t2"];
$ef=$_GET["t3"];
$gh=$_GET["t4"];

$sql="insert into feedback_det(uname,uno,umail,umsg) values('$ab','$cd','$ef','$gh')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Feedback sent successfully...';
}
else
{
    echo 'Error in sending feedback';
}

$conn->close();
?>


<?php
$host='localhost';
$user='root';
$pass='';
$db='mydb';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
echo 'Submit sucessfully...';
}
$Name=$_POST['name'];
$Email=$_POST['email'];
$Number=$_POST['number'];
$Message=$_POST['message'];

$sql="INSERT INTO people(Name,Email,Number,Message) values ('$Name','$Email','$Number','$Message')";
if(!mysqli_query($con,$sql))
{
echo 'data not insert';
}
else
{
echo "    Thank you..";
}

header("refresh:2; url=index.html");
?>


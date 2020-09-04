<?php

 

$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo 'Not connect to server';
}

 

if(!mysqli_select_db($con,'csit'))
{
echo 'Database Not selected';
}

 

$Name = $_POST['Student_email'];
$Email = $_POST['Student_password'];

 

$sql = "INSERT INTO student (Student_email,Student_password) VALUES ('$Name','$Email')";

 

if(!mysqli_query($con,$sql))
{
   echo 'not inserted';
}
else
{
   echo 'Inserted';
}

 

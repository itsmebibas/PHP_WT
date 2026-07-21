<?php
$host="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
if ($conn)
    {
        echo "Database connected successfully";
    }
else
    {
    echo "Error connecting in Db";
    }

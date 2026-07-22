<?php
include "dbconnect.php";
$sql="INSERT INTO STUDENTS
VALUES 
(1,'John',20,'Male','New York'),
(2,'Bibas',21,'Male','Nepal'),
(3,'Sita',19,'Female','Kathmandu'),
(4,'Ramu',22,'Male','Pokhara'),
(5,'Safal',20,'Male','Lalitpur')"; 
$result=mysqli_query($conn,$sql);
if($result)
    {
        echo "<script> alert(record inserted successfully)<?/script>";
    }
else 
    {
        echo "Record inserting error" . mysqli_error($conn);
    }
?>
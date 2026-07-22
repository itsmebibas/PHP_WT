<?php
include "dbconnect.php";
$sql="CREATE TABLE IF NOT EXISTS STUDENTS(
    ID INT PRIMARY KEY,
    NAMES VARCHAR(29),
    AGE INT,
    GENDER varchar(10),
    ADDRESSS VARCHAR(20)
)"; 
$result=mysqli_query($conn,$sql);
if($result)
    {
        echo"table created successful";
    }
else 
    {
        echo "table not created" . mysqli_error($conn);
    }
?>
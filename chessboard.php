<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        body{
            margin:30px;
        }
        td{
            width: 50px;
            height:50px;
            }
        table{
            border:20px ridge whitesmoke;
            heigh:100%;
            padding: 10px;
            outline:12px solid brown;
        }
    </style>
</head>
<body>
    <table>
<?php
    for($r=1;$r<=8;$r++)
        {
            echo "<tr>";
                for($c=1;$c<=8;$c++)
                    {
                        if (($r+$c)%2==0)
                            {
                                echo "<td style = 'background-color:white'></td>";
                            }
                        else
                            {
                            echo "<td style = 'background-color:black'></td>";
                            }
                    }
            echo "</tr>";
        }

?>

    </table>
</body>
</html>
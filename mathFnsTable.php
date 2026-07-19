<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
    <style>
        table{
            padding:10px;
            outline:2px solid black;
        }
    </style>
</head>

<body>
    <table border="2" cellspacing="0" cellpadding="10">
        <tr>
            <th>Number</th>
            <th>Square</th>
            <th>Cube</th>
            <th>Square Root</th>
        </tr>
        <?php
        for($i=1; $i<=10; $i++){
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . ($i * $i) . "</td>";
            echo "<td>" . ($i * $i * $i) . "</td>";
            echo "<td>" . number_format(sqrt($i), 4) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
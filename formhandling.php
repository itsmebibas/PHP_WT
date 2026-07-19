<!-- // form handling is the process to checking the value have reach the php or not -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > input{
            margin-top:10px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="Name" id=""><br>
        Email: <input type="email" name="email" id=""><br>
        Age: <input type="number" name="age" id=""><br>
        Phone: <input type="number" name="phone" id=""><br>
        Address: <input type="text" name="address" id=""><br>

        Hobbies:
        <input type="checkbox" name="Hobbies" id="" value="Cricket">Cricket<br>
        <input type="checkbox" name="Hobbies" id="" value="Football">Football<br>
        <input type="checkbox" name="Hobbies" id="" value="Photography">Photography<br>

        Password: <input type="password" name="password" id="">
        <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
        if(isset($_POST["Submit"]))
            {
                $Name=$_POST['Name'];
                echo "<hr>";
                echo "Welcome";
                echo "<hr>";
                echo"Name => ".$Name;
                $Email=$_POST['email'];
                echo "<br>";
                echo"Email => ".$Email;
                $Age=$_POST['age'];
                echo "<br>";
                echo" Age=>".$Age;
                $Addr=$_POST['address'];
                echo "<br>";
                echo"Address => ".$Addr;
                $Phone=$_POST['phone'];
                echo "<br>";
                echo"Phone=> ".$Phone;
            }
        
    ?>
</body>
</html>
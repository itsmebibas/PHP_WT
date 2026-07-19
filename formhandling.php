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
    <form action="" method="POST" enctype="multipart/form-data">
        Name: <input type="text" name="Name" id=""><br>
        Email: <input type="email" name="email" id=""><br>
        Age: <input type="number" name="age" id=""><br>
        Phone: <input type="number" name="phone" id=""><br>
        Address: <input type="text" name="address" id=""><br>

        Gender:
        <input type="radio" name="sex" id="male">Male
        <input type="radio" name="sex" id="female">Female
        <input type="radio" name="sex" id="other">Other<br>


        Hobbies: <br>
        <input type="checkbox" name="Hobbies[]" id="" value="Cricket">Cricket<br>
        <input type="checkbox" name="Hobbies[]" id="" value="Football">Football<br>
        <input type="checkbox" name="Hobbies[]" id="" value="Photography">Photography<br>

        Image:
        <input type="file" name="Pic" id="" accept="image/*"><br>
        Cv:
        <input type="file" name="CV" id="" accept=".pdf"><br>


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

                $Sex=$_POST['sex'];
                echo "<br>";
                echo" Sex=>".$Sex;

                $Addr=$_POST['address'];
                echo "<br>";
                echo"Address => ".$Addr;

                $Phone=$_POST['phone'];
                echo "<br>";
                echo"Phone=> ".$Phone;

                echo "<br>";
                $Hobbies=$_POST["Hobbies"];
                $Hobbyy=implode(',',$Hobbies);
                echo "Hobbies =>";
                foreach($Hobbies as $value)
                    {
                        echo $value , "<br>";
                    }


                $Pic=$_FILES['Pic']['name'];
                $temp1-$_FILES['Pic']['tmp_name'];
                $folder1="BA/".$Pic;
                move_uploaded_file($temp1,$folder1);

                $Cv=$_FILES['CV']['name'];
                $temp2-$_FILES['CV']['temp_name'];
                $folder2="BA/".$CV;
                move_uploaded_file($temp2,$folder2);

                echo "<br>";
                echo "<img src='$folder1'>";
                echo "<br>";
                echo "<br>";
                echo "<img src='$folder2'>";
                echo "<br>";





            }
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{

        border:2px solid black;
    
        }
    </style>
</head>
<body>
    <h1>Array</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
 
    <?php  
    // $arr=[1,2,3,"Bibas","Adhikari"];
    // echo"<pre>";
    // print_r($arr);
    // echo"<pre>";
    //   $arr1=array(1,2,3,"Bibas","Adhikari");
    // echo"<pre>";
    // print_r($arr1);
    // var_dump($arr);
    // echo "<br>";

    // foreach loop:::

        // foreach($arr as $key=>$value)
        // {
        //     // echo $value,"<br>";
        //     echo $key."=>".$value."<br>";
        // }

    //type of array ->
    // 1. Index array ---->>> which has index as 0,1,2,3,4,......
    // $arrX=[1,2,3,4,"Country","Nepal"];


    //2. Associative Array ->>>

    // $arra=[
    //     "Name"=>"Bibas",
    //     "Age"=>20,
    //     "Address"=>"Morang",
    //     "Gender"=>"Male",
    // ];
    // foreach($arra as $key=>$value)
    //     {
    //         echo $key,"=>",$value,"<br>";
    //     }

    //3. Multidimensional Aray
        //1.Index MD /// Assoc= Associative


        // $arr=
        // [
        //     ["Bibas","M",20,"Morang"],
        //     ["Shisir","M",21,"Palpa"],
        //     ["Safal","M",19,"Lamjung"],
        //     ["Hero","M",21,"Kathmandu"],
        // ];

        // for($i=0;$i<5;$i++)
        //     {
        //         echo "<tr>";
        //         for($j=0;$j<5;$j++)
        //             {
        //                 echo "<td>".$arr[$i][$j]."</td>";
        //             }
                    //echo "</tr>";

        //     }
    //  foreach($arr as $value1)
    //     {
    //         echo "<tr>";
    //         foreach($value1 as $value2)
    //        s     {
    //                 echo "<td>".$value2."</td>";
    //             }
    //         echo "</tr>";
    //     }


    //2.Index Associative array
    // $arr=[
    //     ["Name"=>"Bibas","Age"=>20],
    //     ["Name"=>"Ram","Age"=>21],
    //     ["Name"=>"Shyam","Age"=>22]
    // ];
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // echo $arr[1]['Name']; //method to acces sigle element

        //3. Associative Associative array
    // $arr=[
    //    "User1"=>["Name"=>"Bibas","Age"=>20],
    //     "User2"=>["Name"=>"Ram","Age"=>21],
    //     "User3"=>["Name"=>"Shyam","Age"=>22]
    // ];
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // echo "Accessing Single Element::".$arr['User1']['Name'],"<br>";

        // foreach($arr as $value1)
        // {
        //     echo "<tr>";
        //     foreach($value1 as $value2)
        //         {
        //             echo "<td>".$value2."</td>";
        //         }
        //     echo "</tr>";
        // }
        
        //4.Associative Index Array




    //methods of array

    //in_array
    $arr=[2,4,1,5,2,3,2,1];
    var_dump(in_array('2',$arr)); // used to chech if value is available in array or not
    var_dump(in_array('2',$arr,true)); // used to chech if value is available in array with datatype
    
    //sort array
    echo "<br";
    sort($arr);
    print_r($arr);
    ?>
    </table>
</body>
</html>
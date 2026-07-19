<?php
// echo "Hi Bibas Welcome hii!!";
// $a="This is 1st program !!";
// $b=10;
// $c=6.16;
// $d=null;
// $e=true;
// $f=[1,2,3,4,5];
// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";
// echo $c;
// echo "<br>";
// var_dump($a);
// echo"<br>";
// var_dump($b);
// echo "<br>";
// var_dump($c);
// echo"<br>";
// var_dump($d);
// echo "<br>";
// var_dump($e);
// echo"<br>";
// var_dump($f);


// //object in php

// class Bibas
// {
//     public $name="Bibas Adhikari";
//     public $age= 12;
// }
// $std = new Bibas();
// var_dump($std);
// echo "<br>";

// // echo vs print 
// //echo never return but print return
// // echo is fast print is slow
// // echo support multi parameter whereas print dont support multiple parameter

// echo "Hello","World","<br>";
// print "hello"; // dont allow multiple parameter
// echo "<br>";
// $m= print "Happy Birthday"; //return 1 on result
// echo $m; // echo dont return

//arithmetic operator
// $a=20;
// $b=10;
// $c=10;
// echo "Sum ",$a+$b,"<br>";
// echo "Sub ",$a-$b,"<br>";
// echo "Mul ",$a*$b,"<br>";
// echo "Div ",$a/$b,"<br>";

//assignment operator


//comparision operator
// var_dump($a>$b);
// echo "<br>";
// var_dump($a==$b);
// echo "<br>";
// var_dump($c===$b);
// echo "<br>";
// var_dump($a!=$b);
// echo "<br>";

//<>,<=>   .....-> spaceship -> cmp
// echo($a<=>$b);


//string concatination
// $n="Bib";
// $m="as";
// echo $n.=$m,"<br>";


// conditional program
// check positive  negative and zero

// $a=10;
// $b=20;
// $c=30;
// if($a>0){
//     echo "Positive";
// }
// else if($a<0)
//     echo "Negative";
// else 
//     echo "zero";

// // largest among 3 number
// echo"<br>";
// if($a>$b && $a>$c)
//     echo $a,"largest";

// else if($b>$c && $b>$a)
//     echo $b,"largest";
// else 
//     echo $c,"Largest";

// //check even or odd
// echo"<br>";



// // use of match ->> new technique for conditional in php


// $day=1;
// $t=match($day)
// {
//     1=>"Sunday",
//     2=>"Monday",
//     3=>"Tuesday",
//     4=>"Wednesday",
//     5=>"Tuesday",
//     6=>"Friday",
//     7=>"Saturday",
//     default=>"Invalid Input",
// };
// echo $t;

// $m=match($day)
// {
//     1,7=>"  Weekends",
//     2,6=>" Chaotic Day",
//     3,4,5=>" Work Day",
//     default=>"   Invalid"    
// };
// echo $m;


//loop in php


// //print the number 1 to 1o and vice versa
// $j=10;
// for($i=1;$i<=10;$i++)
//     {
//         echo "<br>",$i;
//     } 
// // 10 to 1 reverse
// while($j!=0)
//     {
//         echo "<br>",$j;
//         $j--;
//     }
// //even
// for($i=1;$i<=10;$i++)
//     {
//         if($i%2==0)
//             echo "<br>",$i;
//     } 

//factorial
// $fact=1;
// $i=1;
// do {
//     $fact*=$i;
//     $i++;
// }while($i<=5);
// echo "Factorial is  ",$fact;

//chess board design code
//     for($r=1;$r<=8;$r++)
//         {
//             echo "<tr>";
//             for($c=1;$c<=8;$c++)
//                 {
//                     if (($r+$c)%2==0)
//                         {
//                             echo "<td style = 'background-color:white'></td>";
//                         }
//                     else{
//                         echo "<td style = 'background-color:black'></td>";
//                     }
//                 }
//             echo "</tr>";
//         }



//use of math function in php

// for($i=1;$i<=10;$i++)
//     {
//         echo "<br>",$i;
//         echo pow($i,2);
//         echo sqrt($i);
//         echo pow($i,3);

//     } 


// string function
// strlen, strpos,
// strcmp,
// chop,
// str_pad,
// substr,=>slice
// strtolower,
// strtoupper,
// str_word_count(),
// str_contains(),str_starts_with(),str_ends_with(), str_replace(),strrev(),trim(),explode()->Array convert

// Que
$str="Today is sunday.Although it is holiday but we are studying and feel bored.";
// a)print the length
// b)find the position of holiday.
// c)convert all string to lower and upper
// d)check whether it is starts from T or not.
// e)check whether it is ends with d or not.
// f)how many words are there.
// g)reverse the string
// h)slice the string sunday.
// i)slice the string feel bored
// j)convert the string into an array
// k)check whether sunday is there or not

echo strlen($str),"<br>";
echo strpos($str,"holiday"),"<br>";
echo strtoupper($str),"<br>";
echo strtolower($str),"<br>";
echo str_starts_with($str,"T"),"<br>";
echo str_ends_with($str,"."),"<br>";
echo str_word_count($str),"<br>";
echo str_contains($str,"is"),"<br>";
echo strrev($str),"<br>";
echo strrev($str),"<br>";
echo substr($str, 9, 6) . "<br>";
echo str_contains($str,"holiday"),"<br>";
print_r(explode(",",$str));

?>

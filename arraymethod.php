<?php
// in_array(),array,search(),array,replace(),array_push(),array_pop(),array_count_values(),array_combine(),array_slice(),array_splice(),array_sum(),array_shift(),array_unshift(),sizeof(),array_diff(),sort(),rsort(),asort(),ksort(),arsort(),krsort()

$list=[2,6,10,8,4,7];
$lang=["PHP","JS","C","CPP"];
$day=[
    "Mon"=>2,"Tue"=>3,"Wed"=>4,"Thu"=>5
];

//operation
print_r(sizeof($list));

$rem=[8];
echo "<br>";
print_r(array_diff($list,$rem));
echo "<br>";
// print_r(array_pop($lang));
echo "<br>";
print_r($lang[sizeof($lang)-1]);
echo "<br>";
foreach($day as $value1)
    {
        echo "<br>",$value1;
    }

?>
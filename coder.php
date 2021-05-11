<?php
function twoNumbers($nums, $target)
{
$i = 0;
$j = 0;
    foreach($nums as $key)
    {
    $i++;
    $j = 0;
        foreach($nums as $key2)
        {
            if(($key + $key2) === $target)
            {
            echo " \$key + \$key2 = " . $key + $key2. "<br> <br>";
            }
        $j++;
        }
    }
}
twoNumbers([30,3,42,22,15,16,6,54], 22);







?>

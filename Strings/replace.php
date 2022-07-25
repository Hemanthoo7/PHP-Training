<?php

$var = "The himalayan mountains are very high.";
$var1 = "987";

if($var == $var1){
    echo str_replace("himalayan mountains" , "himalayas", $var);
}
else
{
    echo str_replace("987", "987 replace with Nine Eight Seven", $var1);
}

?>
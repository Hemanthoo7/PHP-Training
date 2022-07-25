<?php

//Find the first character that is different between two strings

$str1 = 'football';
$str2 = 'footboll';

$str_pos = strspn($str1 ^ $str2, "\0");
printf('Difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");

?>



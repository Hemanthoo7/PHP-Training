<?php

//Extract the file name from the specified string
$path = '242mag.com/admin/admin2';
echo $file_name = strrchr($path,"/");

echo "<br>";

//extract the user name from the following email ID
$email = "hemanth.p@i95dev.com";
echo $emailid = strstr($email, "@",true);

echo "<br>";

//Get the last three characters of a string
echo $last = substr($email, -3);



?>
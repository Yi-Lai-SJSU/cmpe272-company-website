<?php
$myfile = fopen("address.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("address.txt"));
fclose($myfile);
?>
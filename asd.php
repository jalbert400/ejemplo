<?php

$mystring = 'hola mundo cruell pedro';
$findme   = 'a';
$pos = strpos($mystring, $findme);
echo substr($mystring, $pos, $pos+30);
?>

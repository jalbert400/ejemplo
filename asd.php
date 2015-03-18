<?php

$mystring = 'hola mundo cruell';
$findme   = 'a';
$pos = strpos($mystring, $findme);
echo substr($mystring, $pos, $pos+30);
?>
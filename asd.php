<?php

$mystring = 'hola mundo';
$findme   = 'a';
$pos = strpos($mystring, $findme);
echo substr($mystring, $pos, $pos+30);
?>
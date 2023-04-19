<?php 
$title ="PHP is awesome";
define('WIDTH','1140px');
define('PREFIX','OPTION');
define(PREFIX.'_1',1);
define(PREFIX.'_2',2);
define(PREFIX.'_3',3);
define(PREFIX.'_4',3);
echo PREFIX;
require 'index.view.php';
?>
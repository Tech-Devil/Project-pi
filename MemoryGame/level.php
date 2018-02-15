<?php

$level = $_REQUEST["q"];


echo"<h1>". $level."</h1>";


echo <<<HTML

	<input type="button" style = "font-size: 16 pt" value="play" name=$level onclick="play( this.name)" >
          
   
HTML;





?>

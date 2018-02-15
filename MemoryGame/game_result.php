<?php
$rand_num = $_REQUEST["q"];
$user_num = $_REQUEST["f"];


if($rand_num===$user_num){

	echo '<br><br>You Win !!';
}
else{
	echo '<br><br>You lose !!';
	echo "<br>Actual Order : ".$rand_num."<br>You Entered : ".$user_num;
}


?>

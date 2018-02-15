<?php

$level =$_REQUEST["q"];

/*
$html =<<<HTML
    <center><b>Enter answer in order:</b><br>
    Your answer: ( eg. 324165 without any spaces )<br>
    <input id = "game" type="text" name="answer1" required>
                     <br>
    <input type="button" name = "$random_string" value="Submit" onclick = "result_game( document.getElementById('game').value ,this.name )"  >
    </center>
HTML;
echo $html;
*/


if($level=='level_1')
{
shell_exec("/usr/local/bin/gpio -g mode 17 out");
shell_exec("/usr/local/bin/gpio -g mode 27 out");
shell_exec("/usr/local/bin/gpio -g mode 22 out");
shell_exec("/usr/local/bin/gpio -g mode 18 out");
shell_exec("/usr/local/bin/gpio -g mode 23 out");

shell_exec("/usr/local/bin/gpio -g write 17 1");
shell_exec("/usr/local/bin/gpio -g write 27 1");
shell_exec("/usr/local/bin/gpio -g write 22 1");
shell_exec("/usr/local/bin/gpio -g write 18 1");
shell_exec("/usr/local/bin/gpio -g write 23 1");
sleep(1);

shell_exec("/usr/local/bin/gpio -g write 17 0");
shell_exec("/usr/local/bin/gpio -g write 27 0");
shell_exec("/usr/local/bin/gpio -g write 22 0");
shell_exec("/usr/local/bin/gpio -g write 18 0");
shell_exec("/usr/local/bin/gpio -g write 23 0");
sleep(1);

$random_string = generateRandomString_five(5);
//echo "random number = ".$random_string;
echo "<br><center>Notice the Blinking of LEDs</center><br>";

for($i=0;$i<5;$i++)
{
	$char = $random_string[$i];

	if($char == '1') shell_exec("/usr/local/bin/gpio -g write 17 1");
	else if($char == '2') shell_exec("/usr/local/bin/gpio -g write 27 1");
	else if($char == '3') shell_exec("/usr/local/bin/gpio -g write 22 1");
	else if($char == '4') shell_exec("/usr/local/bin/gpio -g write 18 1");
	else if($char == '5') shell_exec("/usr/local/bin/gpio -g write 23 1");

	sleep(1);

	shell_exec("/usr/local/bin/gpio -g write 17 0");
	shell_exec("/usr/local/bin/gpio -g write 27 0");
	shell_exec("/usr/local/bin/gpio -g write 22 0");
	shell_exec("/usr/local/bin/gpio -g write 18 0");
	shell_exec("/usr/local/bin/gpio -g write 23 0");

}

echo <<<HTML
<center><b>Enter answer in order:</b><br>
  Your answer: ( eg. 32415 without any spaces )<br>
  <input id = "game" type="text" name="answer1" required>
  <br>
  <input type="button" name = "$random_string" value="Submit" onclick = "result_game( document.getElementById('game').value ,this.name )"  >
  </center>
HTML;

}


else if($level=='level_2')
{

	shell_exec("/usr/local/bin/gpio -g mode 17 out");
	shell_exec("/usr/local/bin/gpio -g mode 27 out");
	shell_exec("/usr/local/bin/gpio -g mode 22 out");
	shell_exec("/usr/local/bin/gpio -g mode 18 out");
	shell_exec("/usr/local/bin/gpio -g mode 23 out");
	shell_exec("/usr/local/bin/gpio -g mode 24 out");
	//shell_exec("/usr/local/bin/gpio -g mode 21 out");


	shell_exec("/usr/local/bin/gpio -g write 17 1");
	shell_exec("/usr/local/bin/gpio -g write 27 1");
	shell_exec("/usr/local/bin/gpio -g write 22 1");
	shell_exec("/usr/local/bin/gpio -g write 18 1");
	shell_exec("/usr/local/bin/gpio -g write 23 1");
	shell_exec("/usr/local/bin/gpio -g write 24 1");
	//shell_exec("/usr/local/bin/gpio -g write 21 1");


	sleep(1);

	shell_exec("/usr/local/bin/gpio -g write 17 0");
	shell_exec("/usr/local/bin/gpio -g write 27 0");
	shell_exec("/usr/local/bin/gpio -g write 22 0");
	shell_exec("/usr/local/bin/gpio -g write 18 0");
	shell_exec("/usr/local/bin/gpio -g write 23 0");
	shell_exec("/usr/local/bin/gpio -g write 24 0");
	//shell_exec("/usr/local/bin/gpio -g write 21 0");


	sleep(1);

	$random_string = generateRandomString_six(6);

echo "<br><center>Notice the Blinking of LEDs</center><br>";
for($i=0;$i<6;$i++)
{
    $char = $random_string[$i];
    if($char == '1') shell_exec("/usr/local/bin/gpio -g write 17 1");
    else if($char == '2') shell_exec("/usr/local/bin/gpio -g write 27 1");
    else if($char == '3') shell_exec("/usr/local/bin/gpio -g write 22 1");
    else if($char == '4') shell_exec("/usr/local/bin/gpio -g write 18 1");
    else if($char == '5') shell_exec("/usr/local/bin/gpio -g write 23 1");
    else if($char == '6') shell_exec("/usr/local/bin/gpio -g write 24 1");
    //else if($char == '6') shell_exec("/usr/local/bin/gpio -g write 21 1");

    sleep(1);

    shell_exec("/usr/local/bin/gpio -g write 17 0");
    shell_exec("/usr/local/bin/gpio -g write 27 0");
    shell_exec("/usr/local/bin/gpio -g write 22 0");
    shell_exec("/usr/local/bin/gpio -g write 18 0");
    shell_exec("/usr/local/bin/gpio -g write 23 0");
    shell_exec("/usr/local/bin/gpio -g write 24 0");
    //shell_exec("/usr/local/bin/gpio -g write 21 0");

	sleep(0.9);

}
echo <<<HTML
    <center><b>Enter answer in order:</b><br>
    Your answer: ( eg. 324165 without any spaces )<br>
    <input id = "game" type="text" name="answer1" required>
    <br>
    <input type="button" name = "$random_string" value="Submit" onclick = "result_game( document.getElementById('game').value ,this.name )"  >
    </center>
HTML;

}


else if($level=='level_3')
{

	shell_exec("/usr/local/bin/gpio -g mode 17 out");
	shell_exec("/usr/local/bin/gpio -g mode 27 out");
	shell_exec("/usr/local/bin/gpio -g mode 22 out");
	shell_exec("/usr/local/bin/gpio -g mode 18 out");
	shell_exec("/usr/local/bin/gpio -g mode 23 out");
	shell_exec("/usr/local/bin/gpio -g mode 24 out");
	shell_exec("/usr/local/bin/gpio -g mode 21 out");
	shell_exec("/usr/local/bin/gpio -g mode 20 out");

	shell_exec("/usr/local/bin/gpio -g write 17 1");
	shell_exec("/usr/local/bin/gpio -g write 27 1");
	shell_exec("/usr/local/bin/gpio -g write 22 1");
	shell_exec("/usr/local/bin/gpio -g write 18 1");
	shell_exec("/usr/local/bin/gpio -g write 23 1");
	shell_exec("/usr/local/bin/gpio -g write 24 1");
	shell_exec("/usr/local/bin/gpio -g write 21 1");
	shell_exec("/usr/local/bin/gpio -g write 20 1");

	sleep(1);

	shell_exec("/usr/local/bin/gpio -g write 17 0");
	shell_exec("/usr/local/bin/gpio -g write 27 0");
	shell_exec("/usr/local/bin/gpio -g write 22 0");
	shell_exec("/usr/local/bin/gpio -g write 18 0");
	shell_exec("/usr/local/bin/gpio -g write 23 0");
	shell_exec("/usr/local/bin/gpio -g write 24 0");
	shell_exec("/usr/local/bin/gpio -g write 21 0");
	shell_exec("/usr/local/bin/gpio -g write 20 0");

	sleep(1);

$random_string = generateRandomString_eight(8);

echo "<br><center>Notice the Blinking of LEDs</center><br>";
for($i=0;$i<8;$i++)
{
    $char = $random_string[$i];
    if($char == '1') shell_exec("/usr/local/bin/gpio -g write 17 1");
    else if($char == '2') shell_exec("/usr/local/bin/gpio -g write 27 1");
    else if($char == '3') shell_exec("/usr/local/bin/gpio -g write 22 1");
    else if($char == '4') shell_exec("/usr/local/bin/gpio -g write 18 1");
    else if($char == '5') shell_exec("/usr/local/bin/gpio -g write 23 1");
    else if($char == '6') shell_exec("/usr/local/bin/gpio -g write 24 1");
	else if($char == '7') shell_exec("/usr/local/bin/gpio -g write 21 1");
	else if($char == '8') shell_exec("/usr/local/bin/gpio -g write 20 1");
    sleep(1);

    shell_exec("/usr/local/bin/gpio -g write 17 0");
    shell_exec("/usr/local/bin/gpio -g write 27 0");
    shell_exec("/usr/local/bin/gpio -g write 22 0");
    shell_exec("/usr/local/bin/gpio -g write 18 0");
    shell_exec("/usr/local/bin/gpio -g write 23 0");
    shell_exec("/usr/local/bin/gpio -g write 24 0");
    shell_exec("/usr/local/bin/gpio -g write 21 0");
    shell_exec("/usr/local/bin/gpio -g write 20 0");

}
echo <<<HTML
    <center><b>Enter answer in order:</b><br>
    Your answer: ( eg. 32841675 without any spaces )<br>
    <input id = "game" type="text" name="answer1" required>
    <br>
    <input type="button" name = "$random_string" value="Submit" onclick = "result_game( document.getElementById('game').value ,this.name )"  >
    </center>
HTML;

}



function generateRandomString_five($length = 5) {
	$characters = '12345';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}


function generateRandomString_six($length = 6) {
        $characters = '123456';
	        $charactersLength = strlen($characters);
	        $randomString = '';
		 for ($i = 0; $i < $length; $i++) {
			 $randomString .= $characters[rand(0, $charactersLength - 1)];
	        }
        return $randomString;
}


function generateRandomString_eight($length = 8) {
	        $characters = '12345678';
	        $charactersLength = strlen($characters);
	        $randomString = '';
	        for ($i = 0; $i < $length; $i++) {
	                $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}


function generateRandomString_nine($length = 9) {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
}






?>

<?php

echo <<<HTML
<!DOCTYPE html>
<head>
<title>WIFI Controlled LED</title>
<meta name="viewport" content="width=device-width, initial-scale=.5">
</head>

<body style = "background:black;color:white">
<center><b><br><br><br><h1>Select Level:</b>
<br>
	<input type ="button" value="LEVEL I" name="level_1" onclick ="LevelPrinter1(this.name)" >
	<input type="button" value="LEVEL II" name="level_2" onclick ="LevelPrinter1(this.name)" >
	<input type="button" value="LEVEL III" name="level_3" onclick ="LevelPrinter1(this.name)" >



<div id="Level_print">
</div>

<div id = "play_game">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>


function LevelPrinter1(levelname){
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {

			document.getElementById("Level_print").innerHTML = this.responseText;


		}

	}
	xmlhttp.open("POST", "level.php", true);

	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");       

	xmlhttp.send("q="+levelname);

}



function play(level){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
		{	
			document.getElementById("play_game").innerHTML = this.responseText;


		}
    }

	xmlhttp.open("POST", "play.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");       
	xmlhttp.send("q="+level);

}



function result_game(rand_num ,user_num){
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){ 
    if (this.readyState == 4 && this.status == 200)
    {
		document.getElementById("play_game").innerHTML = this.responseText;
    }
    }


    xmlhttp.open("POST", "game_result.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  
	xmlhttp.send( "q="+rand_num+"&f="+user_num);
}



</script>

</center></body></html>
HTML;



?>

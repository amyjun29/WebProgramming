<!-- ! press tab -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="images/dice.ico" />

 <link rel="stylesheet" type="text/css" href="level1.css">

  <title>Dice Roll</title>

</head>
<body>
<div class="center">
<h1>PART 1: </h1>
<center>  <img src="dice.png" height="200px" width="200px"/><h1> Roll the Dice </h1>
  <br>
  <p>
    <img id="dice"class=""src="images/
	<?php echo rand(1,6);?>.png"/>
  </p><br>
<input id="stop" class="button"type="button" value="Roll the Dice" onClick="location.href='level1.php'"/>

<?php
function isBitten($prob){
   if($prob >= ){
     return true;
	 }else{
     return false;
	 }
}
if(isBitten($prob)){
 echo "Probability of Charlie eating my lunch: ".$prob;
  echo"<h4>Charlie ate my lunch!</h4>";
}else{
 echo "Probability of Charlie eating my lunch: ".$prob;
  echo "<h4>Charlie did not eat my lunch!</h4>";
}
?>
<br><br>
<a href='index.html?original_table=true'>Back to Home </a>
</div>
	</body>
</html>
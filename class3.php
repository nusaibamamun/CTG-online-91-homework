<!DOCTYPE html>
<html>
<head>
	<title>Class3</title>
</head>
<body>
<?php
//Task1
echo"Task-1 <br> <br>";
for($i = 20; $i > 9; $i--){
	echo $i."<br> <br>"; 
}

//Task2
echo"Task-2 <br> <br>";
for($i = 1; $i <= 4; $i++){
$sum = 1;
$sum = $i + $sum; 
  if( $i == 4){
  	echo $i. " = ".$sum;
  }
  else{
  	echo $i." + ";
  }
}
echo "<br> <br>";

//Task3
echo"Task-3 <br> <br>";
for( $i = 40; $i < 46; $i++){
	for($j = 1; $j < 11; $j++){
		echo "$i X $j = ". ($i*$j). "<br>";
	}
	echo "<br> <br>";
}


//Task4
echo"Task-4 <br> <br>";
function Sum($n) 
{ 
	// echo "$n + ";

	// if($n == 5){
	// 	echo " = ";
	// }
    		if ($n > 4) 
        		return $n; 
    		return $n + Sum($n + 1);
} 
  
$n = 1;
echo(Sum($n)); 
echo "<br> <br>"; 

//Task5
echo"Task-5 <br><br>";
$arr = array("1","2","3","4","5","6","7","8","9","10");
for ($i = 0; $i < count($arr); $i++){
	if($i % 2 == 0){
		echo $arr[$i]."<br>";
	}
}
echo "<br>";

//Task6
echo"Task-6 <br> <br>";
$arr = array("Nusaiba","Nafisa","Rida","Fahim","Azmain","Naila","Topu","Raihan","Fammy","Maimuna");
for($i = 0; $i < count($arr); $i++ ){
	if(strlen($arr[$i]) <= 5){
		echo ($arr[$i]."<br>");
	}
}
	
?>
</body>
</html>
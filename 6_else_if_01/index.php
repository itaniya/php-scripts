<!doctype>
<html>
<head>
<title>ELSE/IF(Multi Condition) in PHP</title>
</head>
<body>
<?php
$var_x= 12;

$var_a= 11;
$var_b= 12;
$var_c= 13;
$var_d= 14;

if($var_x == $var_a){
	echo "Var x and Var a both are holding same value";
}else if($var_x == $var_b){
	echo "Var x and Var b both are holding same value";
}else if($var_x == $var_c){
	echo "Var x and Var c both are holding same value";
}else if($var_x == $var_d){
	echo "Var x and Var d both are holding same value";
}else{
	echo "No match found!";
}

?>
</body>
</html>
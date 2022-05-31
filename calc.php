<html>
<head>
<title>calculator</title>
</head>
<body>
<center>
<form >

<input type="text" name="op1" placeholder="Enter value">
<br><br>
<input type="text" name="op2" placeholder="Enter value">
<br><br>
<select name="ops">
<option>oper</option>
<option>*</option>
<option>+</option>
<option>-</option>
<option>/</option>
<option>%</option>
</select>
<br><br>
<input type="submit" value="calculate">
</form>

<?php
if($_REQUEST["op1"]!=""&&$_REQUEST["op2"]!="")
{
if((is_numeric($_REQUEST["op1"]))&&(is_numeric($_REQUEST["op2"])))
{
$op1=$_REQUEST["op1"];
$op2=$_REQUEST["op2"];
$op3=$_REQUEST["ops"];
switch($op3)
{
case "*":$res=$op1*$op2;break;
case "-":$res=$op1-$op2;break;
case "+":$res=$op1+$op2;break;
case "/":$res=$op1/$op2;break;
case "%":$res=$op1%$op2;break;
case oper:echo "Choose an operator";break;
}
echo "Result is $res<br>";
}
else 
echo "enter only numerical values<br>";
}
else 
echo "enter values<br></center>";
?>
</body>
</html>

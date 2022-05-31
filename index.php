
<?php
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
if($user&&$pass)
{
$conn=mysqli_connect("localhost","root","") or die("not connecting to database server");
mysqli_select_db($conn,"sample1") or die("no database selected");
$q="select name from student where name='".$user."' and password='".$pass."';";
$r=mysqli_query($conn,$q) or die("query failed".mysqli_error($conn));
if($r)
{
$nr=mysqli_num_rows($r);
if($nr!=0)
{
echo "Login successful<br>";
echo "Hello".$user;
}
else
{
$q2="select name from student where name='".$user."';";
$r2=mysqli_query($conn,$q2);
if($r2)
{
$rs1=mysqli_num_rows($r2);
if($rs1==0)
echo "Invalid login<br>";
else
echo "Invalid password<br>";
}

}
}
}
else
echo "Please Enter username and password<br>";
?>

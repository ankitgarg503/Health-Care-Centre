
<?php
  echo "hello";

$servername = "localhost";
$username = "root";
//$password = "";

$conn=mysqli_connect($servername,$username/*$password*/);

echo "\nConnection was successful";

$pid=$_POST['pid'];
$name=$_POST['name'];
$mail =$_POST['mail'];
$adress=$_POST['adress'];
$mobile=$_POST['mobile'];
echo " $pid  $name   $adress ";
mysqli_select_db($conn,'anshu');
$q="insert into hcc(name,mail,mobile,pid,adress)Values('$name','$mail','$mobile','$pid','$adress')";
$i=mysqli_query($conn,$q);
echo $i;

?>






























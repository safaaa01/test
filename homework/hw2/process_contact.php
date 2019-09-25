<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$contribution = $_POST['contribution'];
$mailing = $_POST['mailing'];
$comments = $_POST['comments'];
echo "$first_name<br>";
echo "$last_name<br>";
echo "$email<br>";
echo "$gender<br>";
echo "$age<br>";
if(!empty($_POST['interest1'])){
$interest1 = $_POST['interest1'];
echo "$interest1<br>";
}
if(!empty($_POST['interest2'])){
$interest2 = $_POST['interest2'];
echo "$interest2<br>";
}
if(!empty($_POST['interest3'])){
$interest3 = $_POST['interest3'];
echo "$interest3<br>";
}
if(!empty($_POST['interest4'])){
$interest4 = $_POST['interest4'];
echo "$interest4<br>";
}
if(!empty($_POST['interest5'])){
$interest5 = $_POST['interest5'];
echo "$interest5<br>";
}
if(!empty($_POST['interest6'])){
$interest6 = $_POST['interest6'];
echo "$interest6<br>";
}
echo "$contribution<br>";
echo "$comments<br>";
?>

<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'webdev');

$fname = $_POST['fnm'];
$lname = $_POST['lnm'];
$email = $_POST['eml'];
$pass = $_POST['pss'];
$phno = $_POST['phone'];

$s = "SELECT * FROM login WHERE Email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    header("Location: regfail.php");
}
else{
    $reg = "INSERT INTO `login` (`Email`, `Password`, `Firstname`, `Lastname`, `Phone_Number`) VALUES ('$email', '$pass', '$fname', '$lname', '$phno');";
    mysqli_query($con, $reg);
    $_SESSION['email'] = $email;
    header("Location: regsucess.php");
}
?>

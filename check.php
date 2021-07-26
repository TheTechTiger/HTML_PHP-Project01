<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'webDev');

$email = $_POST['eml'];
$pass = $_POST['pss'];

$s = " SELECT * FROM login WHERE Email = '$email' && Password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    while($row = $result->fetch_assoc()) {
        $name = $row["Firstname"]." ".$row["Lastname"];
        $phno = $row["Phone_Number"];
    }
    $_SESSION['name'] = $name;
    $_SESSION['phno'] = $phno;
    $_SESSION['email'] = $email;
    header("Location: pass.php");
}else{
    header("Location: fail.php");
}

?>

<html>
    <head>
        <title>
            Redirecting
        </title>
        <link rel="icon" src="avtar.png">
    </head>
</html>

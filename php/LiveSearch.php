<?php
$q = intval($_GET['q']);


$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mydb");
$sql="SELECT * FROM `event` WHERE EVENT_ID = '".$q."'";
$result = mysqli_query($con,$sql);



mysqli_close($con);
?>
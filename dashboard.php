<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: *');
header("Access-Control-Allow-Headers: Content-Type, authorization");

require("./connection.php");
$query = "SELECT * FROM population";
$result = mysqli_query($conn, $query);
$assocresult = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo(json_encode($assocresult));
echo(json_encode($assocresult));
?>

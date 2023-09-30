<?php
// cors issue solved
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: *');
header("Access-Control-Allow-Headers: Content-Type, authorization");

$allStuduent = [
    "firstname"=>"sola",
    "lastname"=>"tope",
    "email"=>"fona",
    "password"=>"tunde",    
];

// require("./connection.php");
// $query = "SELECT * FROM students";
// $result = mysqli_query($conn, $query);
// $assocresult = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo("it as enter backend oo");
echo(json_encode($allStuduent));
// echo(json_encode($assocresult));

?>
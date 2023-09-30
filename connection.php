<?php
$conn = mysqli_connect("localhost","root","","population");
if($conn){
    // echo("e don connect oooo");
}else{
    echo("sql no gree connect oooo");
    echo(mysqli_connect_error());
}
?>
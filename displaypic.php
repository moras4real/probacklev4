<?php
require("./connection.php");
session_start();
$user_id = $_SESSION['id'];
$query = "SELECT * FROM students WHERE first_name = '$user_id'";
// $result = mysqli_query($conn, $query);
// $assocresult = mysqli_fetch_all($result, MYSQLI_ASSOC);
$result = $conn->query($query);
$user = $result->fetch_assoc();

if (isset($_POST["submit"])){
header('Location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto shadow p-5">

                <h1 class="text-primary text-center">Welcome <?php echo $user['first_name']; ?></h1>
                <img src="<?php echo  "images/" . $user['user_pic'] ?>" alt="" style="width: 100px; height: 100px; border-radius: 100%; border: 3px groove blue">
                <form action="" method="POST">
                <input type="submit" name="submit" value="Visit Dashboard Now" class="btn btn-sm btn-success w-30">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include("db.php");

if(isset($_POST['user_ID'])){
    $user_ID = mysqli_real_escape_string($con, $_POST['user_ID']);

    $query = "UPDATE user SET status='Suspended' WHERE user_ID='$user_ID'";
    $result = mysqli_query($con, $query);

    if($result){
        echo "User suspended successfully";
    } else {
        echo "Error suspending user";
    }
}
?>

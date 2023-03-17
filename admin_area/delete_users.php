<?php
if(isset($_GET['delete_users']));
$delete_users = $_GET['delete_users'];
$delete_query = "DELETE from `user_table` WHERE user_id=$delete_users";
$result = mysqli_query($con,$delete_query);
echo "<script>alert('User has been deleted successfullly')</script>";
echo "<script>window.open('index.php?list_users', '_self')</script>";

?>
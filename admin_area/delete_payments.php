<?php
if(isset($_GET['delete_payments'])) {
    $delete_payments = $_GET['delete_payments'];
    // echo $delete_payments;
    $delete_query = "DELETE from `user_payments` WHERE payment_id=$delete_payments";
    $result = mysqli_query($con, $delete_query);
    if($result) {
        echo "<script>alert('Payment has been deleted successfully')</script>";
        echo "<script>window.open('./index.php?list_payments', '_self')</script>";
    }
}
?>
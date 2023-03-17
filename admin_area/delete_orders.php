<?php
if(isset($_GET['delete_orders'])) {
    $delete_orders= $_GET['delete_orders'];
    // echo $delete_orders;
    $delete_query = "DELETE from `user_orders` WHERE order_id=$delete_orders";
    $result = mysqli_query($con,$delete_query);
    if($result) {
        echo "<script>alert('Order has been deleted successfully')</script>";
        echo "<script>window.open('./index.php?list_orders', '_self')</script>";
    }
}

?>
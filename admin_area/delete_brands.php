<?php
if(isset($_GET['delete_brands'])) {
    $delete_brands= $_GET['delete_brands'];
    // echo $delete_brand;
    $delete_query = "DELETE from `brands` WHERE brand_id=$delete_brands";
    $result = mysqli_query($con,$delete_query);
    if($result) {
        echo "<script>alert('Brand has been deleted successfully')</script>";
        echo "<script>window.open('./index.php?view_brands', '_self')</script>";
    }
}

?>
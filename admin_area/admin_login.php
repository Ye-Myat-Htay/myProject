<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/adminreg.png" alt="Admin Registration" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="admin_email" class="form-label">Email</label>
                        <input type="text" id="admin_email" name="admin_email" placeholder="Enter your email" required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="password" id="admin_password" name="admin_password" placeholder="Enter your password" required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary border-0" name="admin_login" value="Login">
                        <p class="small fw-bold mt-3">Don't you have an account? <a href="admin_registration.php" class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_login'])) {
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    
    $select_query = "SELECT * from `admin_table` WHERE admin_email='$admin_email'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    // $user_ip = getIPAddress();

    // cart item
    // $select_query_cart = "SELECT * from `cart_details` WHERE ip_address='$user_ip'";
    // $select_cart = mysqli_query($con, $select_query_cart);
    // $row_count_cart = mysqli_num_rows($select_cart);
    
    if($row_count > 0 ) {
        $_SESSION['admin_email'] = $admin_email;
        if(password_verify($admin_password, $row_data['admin_password'])) {
            echo "<script>alert('Login succesful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            } else {
                echo "<script>alert('Username or password incorrect')</script>";
            }
        } 
}


?>
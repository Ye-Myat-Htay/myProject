<h3 class="text-center text-success">All Users</h3>
<table class="table">
  <thead>
<?php
$get_users = "SELECT * from `user_table`";
$result = mysqli_query($con,$get_users);
$row_count = mysqli_num_rows($result);

if($row_count == 0) {
    echo "<h2 class='bg-danger text-center mt-5'>No users yet</h2>";
} else { 
  echo "<tr>
        <th scope='col'>No</th>
        <th scope='col'>Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>User Image</th>
        <th scope='col'>Address</th>
        <th scope='col'>Mobile</th>
        <th scope='col'>Delete</th>
        </tr>
    </thead>
<tbody>";
    $number = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_email = $row['user_email']; 
        $user_image = $row['user_image'];
        $user_address = $row['user_address'];
        $user_mobile = $row['user_mobile'];
        $number++ ;
        echo "<tr>
                <th scope='row'>$number</th>
                <td>$username</td>
                <td>$user_email</td>
                <td><img src='../users_area/user_images/$user_image' alt='$username' class='product_img'</td>
                <td>$user_address</td>
                <td>$user_mobile</td>
                <td><a href='index.php?delete_users=$user_id'><i  class='fa-solid fa-trash'></i></a></td>
            </tr>";
    }
}

?>

  </tbody>
</table>
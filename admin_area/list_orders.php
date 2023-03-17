<h3 class="text-center text-success">All Orders</h3>
<table class="table">
  <thead>
<?php
$get_orders = "SELECT * from `user_orders`";
$result = mysqli_query($con,$get_orders);
$row_count = mysqli_num_rows($result);

if($row_count == 0) {
    echo "<h2 class='bg-danger text-center mt-5'>No orders yet</h2>";
} else { 
  echo "<tr>
        <th scope='col'>No</th>
        <th scope='col'>Due Amount</th>
        <th scope='col'>Invoice Number</th>
        <th scope='col'>Total Products</th>
        <th scope='col'>Order Date</th>
        <th scope='col'>Status</th>
        <th scope='col'>Delete</th>
        </tr>
    </thead>
<tbody>";
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)) {
        $order_id = $row_data['order_id'];
        $user_id = $row_data['user_id'];
        $amount_due = $row_data['amount_due'];
        $invoice_number = $row_data['invoice_number'];
        $total_products = $row_data['total_products'];
        $order_date = $row_data['order_date'];
        $order_status = $row_data['order_status'];
        $number++ ;
        echo "<tr>
                <th scope='row'>$number</th>
                <td>$amount_due/-</td>
                <td>$invoice_number</td>
                <td>$total_products</td>
                <td>$order_date</td>
                <td>$order_status</td>
                <td><a href='index.php?delete_orders=$order_id'><i  class='fa-solid fa-trash'></i></a></td>
            </tr>";
    }
}

?>

  </tbody>
</table>
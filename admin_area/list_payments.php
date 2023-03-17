<h3 class="text-center text-success">All Payments</h3>
<table class="table">
  <thead>
<?php
$get_payments = "SELECT * from `user_payments`";
$result = mysqli_query($con,$get_payments);
$row_count = mysqli_num_rows($result);

if($row_count == 0) {
    echo "<h2 class='bg-danger text-center mt-5'>No payments received yet</h2>";
} else { 
  echo "<tr>
        <th scope='col'>No</th>
        <th scope='col'>Invoice Number</th>
        <th scope='col'>Amount</th>
        <th scope='col'>Payment mode</th>
        <th scope='col'>Order Date</th>
        <th scope='col'>Delete</th>
        </tr>
    </thead>
<tbody>";
    $number = 0;
    while($row_data = mysqli_fetch_assoc($result)) {
        $payment_id = $row_data['payment_id'];
        $order_id = $row_data['order_id']; 
        $invoice_number = $row_data['invoice_number'];
        $amount = $row_data['amount'];
        $payment_mode = $row_data['payment_mode'];
        $date = $row_data['date'];
        $number++ ;
        echo "<tr>
                <th scope='row'>$number</th>
                <td>$invoice_number</td>
                <td>$amount/-</td>
                <td>$payment_mode</td>
                <td>$date</td>
                <td><a href='index.php?delete_payments=$payment_id'><i  class='fa-solid fa-trash'></i></a></td>
            </tr>";
    }
}

?>

  </tbody>
</table>
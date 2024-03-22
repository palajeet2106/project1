<?php

include("connection.php");

if(isset($_POST['btnorder']) && isset($_SESSION['userId'])){
    $amount= $_POST['netamount'];
    $orderid= $_POST['orderid'];

    if($user ->updateUser($_POST['userId'])){
        $user->sendOrder();
        $res= $user->displayUser();
        $data= mysqli_fetch_assoc($res);
    }

}

?>

<form action="function.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_KsrCWCluRZiD4w"
    data-amount="<?php echo $amount*100; ?>"
    data-currency="INR"
    data-name="Ecoshop"
    data-image=""
    data-description=""
    data-prefill.name="<?php echo $data['firstName'].' '.$data['lastName']?>"
    data-prefill.email="<?php echo $data['email']?>"
    data-prefill.contact="<?php echo $data['contact']?>"
    data-notes.shopping_order_id=""
    data-order_id=""
    >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <!-- <input type="hidden" name="shopping_order_id" value="3456"> -->
  <input type="hidden" name="paymentsuccess" value="Success">
  <input type="hidden" name="orderid" value="<?php echo $orderid;?>">
</form>

<style>
    .razorpay-payment-button{
        display:none
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function(){
        $(".razorpay-payment-button").click();
    })
</script>
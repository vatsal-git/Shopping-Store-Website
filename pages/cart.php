<?php include('../admin/server/cart_server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Cart</h2>

   
    <form method="post" action="cart.php">
  	<?php include('../admin/error/account_error.php'); ?>
      
        
            <h3>Billing Address</h3>
            
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo $username; ?>">
            <input type="text" id="email" name="email" placeholder="email" value="<?php echo $email; ?>">
            <input type="text" id="adr" name="address" placeholder="Adderss" value="<?php echo $address; ?>">
            <input type="text" id="city" name="city" placeholder="City" value="<?php echo $city; ?>">
            <input type="text" id="state" name="state" placeholder="State" value="<?php echo $state; ?>">
            <input type="text" id="zip" name="zip" placeholder="Zip Code" value="<?php echo $zip; ?>">
             

         
            <h3>Payment</h3>
 
            <input type="text" id="cname" name="cardname" placeholder="Card Name">
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card Number" value="<?php echo $cardnumber; ?>">
            <input type="text" id="expmonth" name="expmonth" placeholder="Expire Month">
            <input type="text" id="expyear" name="expyear" placeholder="Expire Year">
            <input type="text" id="cvv" name="cvv" placeholder="CVV">
             
        
        <input type="submit" value="Checkout" name="checkout_user" class="btn">
   

</body>
</html>
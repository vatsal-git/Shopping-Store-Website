<?php include('cart server.php') ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Checkout</h2>

   
    <form method="post" action="cart.php">
  	<?php include('account error.php'); ?>
      
        
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo $username; ?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" value="<?php echo $email; ?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" value="<?php echo $address; ?>">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" value="<?php echo $city; ?>">

            
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" value="<?php echo $state; ?>">
              
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" value="<?php echo $zip; ?>">
             

         
            <h3>Payment</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" value="<?php echo $cardnumber; ?>">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
           
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
             
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
             
        
        <input type="submit" value="Continue to checkout" name="checkout_user" class="btn">
   

</body>
</html>
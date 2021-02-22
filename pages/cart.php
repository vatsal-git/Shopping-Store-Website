<?php include('../admin/server/cart_server.php'); ?>
<?php include('../admin/partials/header.php'); ?>

<div id="user-section">

    <div class="user-form">
        <div class="form-logo">
            <a href="index.php"><img src="../img/trac-logo.svg" alt="logo"></a>
        </div><br><br>

        <form method="post" action="cart.php">

<?php include('../admin/error/error.php'); ?>
        <div class="cart d-flex justify-content-center">
            <div class="cart-child">
                <h2>Billing</h2><br>

                <div class="mb-2">
                    <input type="text" name="username" class="form-control" placeholder="Username"
                        value="<?php echo $username; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="address" class="form-control" placeholder="Address"
                        value="<?php echo $address; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $city; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="state" class="form-control" placeholder="State" value="<?php echo $state; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="zip" class="form-control" placeholder="ZIP Code" value="<?php echo $zip; ?>">
                </div><br>
            </div>
            <div class="cart-child">
                <h2>Payment</h2><br>

                <div class="mb-2">
                    <input type="text" name="cardname" class="form-control" placeholder="Card Name">
                </div>
                <div class="mb-2">
                    <input type="text" name="cardnumber" class="form-control" placeholder="Card Number"
                        value="<?php echo $cardnumber; ?>">
                </div>
                <div class="mb-2">
                    <input type="text" name="expmonth" class="form-control" placeholder="Expire Month">
                </div>
                <div class="mb-2">
                    <input type="text" name="expyear" class="form-control" placeholder="Expire Year">
                </div>
                <div class="mb-2">
                    <input type="text" name="cvv" class="form-control" placeholder="CVV">
                </div>
                <button type="submit" class="btn btn-lg form-submit" name="checkout_user">Submit</button><br><br>
            </div>
        </div>    
        </form>
    </div>
</div>

<?php include('../admin/partials/footer.php'); ?>
<?php
session_start();
include_once('DB.php');

$success_return = 'http://www.codexworld.com/cancel.php';
$cancel_return = 'http://www.codexworld.com/success.php';
$ipn_url = 'http://www.codexworld.com/ipn.php';

$paypalID = 'threads.ahsan@gmail.com';

?>
<html>
<body>
    <form method="post" id="cart" name="cart" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="upload" value="1">
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        <input type="hidden" name="lc" value="US">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="button_subtype" value="services">
        <input type="hidden" name="notify_url" value="<?php echo $success_return; ?>" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
        <input type="hidden" name="return" value="<?php echo $success_return; ?>" />
      
        <?php
            $item = 1;
            //Fetch products from the database
            $cart_check_query = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='". $_SESSION["userid"] ."'";
            $result = mysqli_query($conn, $cart_check_query);
            //$results = $db->query("SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'");
            while($row = $result->fetch_assoc()){
        ?>
        <input type="hidden" name="item_name_<?php echo $item; ?>" value="<?php echo $row['Service_Name']; ?>"/>
        <input type="hidden" name="amount_<?php echo $item; ?>" value="<?php echo $row['Service_Price']; ?>"/>
        <?php 
            $item++; 
            } 
        ?>
       
        <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="0" height="0">
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
      <script type="text/javascript">
        document.getElementById('cart').submit();
    </script>
</body>
</html>
<?php exit(); ?>
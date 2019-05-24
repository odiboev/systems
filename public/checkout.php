<?php error_reporting(0); ?>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID">
  </script>
</body>

<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <div class="container">

<div class="row">
      <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Checkout</h1>




</form>



</form>
<!-- 
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="roundandround@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Huawei Honor 4">
<input type="hidden" name="amount" value="113.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="shipping" value="30.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHosted">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->



<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="roundandround@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Huawei Honor 4">
<input type="hidden" name="amount" value="113.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="shipping" value="30.00">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
          </tr>
        </thead>
        <tbody>
          <?php cart(); ?>
        </tbody>
    </table>
  <?php echo show_paypal(); ?>
</form>

<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="roundandround@gmail.com">
  <input type="hidden" name="lc" value="MY">
  <input type="hidden" name="item_name" value="item_name">
  <input type="hidden" name="amount" value="0.00">
  <input type="hidden" name="currency_code" value="MYR">
  <input type="hidden" name="button_subtype" value="services">
  <input type="hidden" name="no_note" value="0">
  <input type="hidden" name="cn" value="Add special instructions to the seller:">
  <input type="hidden" name="no_shipping" value="2">
  <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
</form> -->




<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-left ">
<h2>Order Details</h2>

<table class="table table-bordered" cellspacing="0">

<form action="#" method="post" class="shippingOptions" id="shippingOptions">  
<tr class="cart-subtotal">
<th>Items</th>
<td><span class="amount"><?php 
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>

<!-- < RM 250	            RM 30.00
       RM 250 – RM 500	  RM 25.00
       RM 500 – RM 750	  RM 10
>      RM 750	            Free -->


<!-- trying to add shipping cost and etc -->
</tr>

<tr class="shipping">
<th>Shipping Options</th>
<!-- Free Shipping text below between td, shit better idea -->

<td>
    <?php $option =""; ?>
    <input type="radio" name="option" value="0" checked/> Land<br>
    <input type="radio" name="option" value="0.025"/> Air

</td>

</tr>

<tr class="shipping">
<th>Shipping Fees</th>
<!-- Free Shipping text below between td, shit better idea -->
<td>RM <?php 

if(isset($_SESSION['item_total'])) {
  $shitt = $_SESSION['item_total'];
}

// $shitt = (($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0");
// #echo isset($shitt);

$shipping_fees = 0;

if ($shitt == 0){
  $shipping_fees = 0;
}elseif ($shitt < 250) {
  $shipping_fees = 30;
} elseif ($shitt > 250 and $shitt < 500) {
  $shipping_fees = 25;
} elseif ($shitt > 500 and $shitt < 750) {
  $shipping_fees = 10;
} elseif ($shitt > 750) {
  $shipping_fees = 0;
}
echo $shipping_fees
?></td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"> RM 

<?php 
$order_total = $shipping_fees + (($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0");
$product_price = $order_total;
#echo isset($order_total);
echo $order_total;
?>

</span></strong> </td>
</tr>


</tbody>

</table>
</form>

                                                    <!-- <script>
                                                    // get list of radio buttons with name 'option'
                                                    var sz = document.forms['shippingOptions'].elements['option'];

                                                    // loop through list
                                                    for (var i=0, len=sz.length; i<len; i++) {
                                                        sz[i].onclick = function() { // assign onclick handler function to each
                                                            // put clicked radio button's value in total field
                                                            var fees = <?php echo $shipping_fees ?>;
                                                            this.form.elements.total.value = fees;
                                                        };
                                                    }
                                                    </script>  -->

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

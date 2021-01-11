<style>
.

</style>

<?php
session_start();
require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="mx.png" sizes="32x32">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  background-image: url("amfundal.jpg");
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: grey;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #b3b3b3;
}

a {
  color: grey;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body >

<h2 style="background-color:grey;">Completează datele corespunzătoare</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form id="submitOrderForm" method="post" action="submit_order.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Adresă de livrare</h3>
            <label for="fname"><i class="fa fa-user"></i> Nume și Prenume</label>
            <input type="text" id="fname" name="fname" placeholder="Popescu Ioan" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="popescu@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Adresă</label>
            <input type="text" id="adr" name="adr" placeholder="STR. George Enescu" required>
            <label for="city"><i class="fa fa-institution"></i> Oraș</label>
            <input type="text" id="city" name="city" placeholder="Timisoara" required>

            <div class="row">
              <div class="col-50">
                <label for="state">Județ</label>
                <input type="text" id="state" name="state" placeholder="Timis" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Plată</h3>
            <label for="fname">Carduri Acceptate</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Numele Cardului</label>
            <input type="text" id="cname" name="cardname" placeholder="Popescu Ioan">
            <label for="ccnum">Numărul cardului</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Luna de expirare</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Septembrie">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Anul de expirare</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Adresa de facturare să fie la fel cu cea de livrare.
        </label>
        <input type="submit" value="Submit order" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
	
      <h4>Shopping Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
      <?php
		if(isset($_SESSION["cart_products"])) //check session var
		{
			$total = 0; //set initial total value
			$b = 0; //var for zebra stripe table 
			foreach ($_SESSION["cart_products"] as $cart_itm)
			{
				$product_name = $cart_itm["product_name"];		
				$product_price = $cart_itm["product_price"];	
				$product_qty = $cart_itm["product_qty"];	
				$subtotal = ($product_price * $product_qty); //calculate Price x Qty
				
				echo '<p style="font-size:10pt;">'.$product_qty.' x '.$product_name.'<span class="price">'.$currency.$product_price.'</span></p>';
				 
				$total = ($total + $subtotal); //add subtotal to total var
				$b ++;
			}
			echo ' <p><b>Total</b> <span class="price" style="color:black"><b>'.$currency.$total.'</b></span></p>';			
		}
		?>
    </div>
  </div>
</div>

</body>

</html>

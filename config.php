  
<?php
$currency = 'RON '; 
$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );
                                   		
$db_user = "root";
$db_pass = '';
$db_name = "users";

$db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
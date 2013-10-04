<?php
require_once(dirname(__FILE__).'/customer.php');

// Creating new customer
$customer = new Customer('David');
// Setting up password
$customer->setPassword('123');

// Checking password if valid
$result1 = ($customer->checkPassword('123'))?"Password True":" Password False"; //check 123
echo "Password 123 -> $result1 <br/>";

$result2 = ($customer->checkPassword('12'))?"Password True":"Password False"; // check 12
echo "Password 12 -> $result2 <br/>";

$result3 = ($customer->checkPassword('122'))?"Password True":"Password False"; // check 122
echo "Password 122 -> $result3 <br/>";

// Printing the summary
echo "Summary -> ".$customer->getSummary();

?>
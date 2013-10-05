<?php

require_once(dirname(__FILE__).'/customer.php');

$customer = new Customer('David');

$customer->setPassword('123');

// Checking password if valid
echo "123 Password ";
($customer->checkPassword('123'))
?"Correct"
:"Incorrect";
echo "<br/>";

echo "12 Password ";
($customer->checkPassword('12'))
?"Correct"
:"Incorrect";
echo "<br/>";

echo "122 Password ";
($customer->checkPassword('122'))
?"Correct"
:"Incorrect";
echo "<br/>";

// Printing the summary
echo $customer->getSummary();

?>

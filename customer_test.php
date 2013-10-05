<?php
require_once(dirname(__FILE__).'/customer.php');

$customer = new Customer('David'); // Init new customer
$customer->setPassword('123'); // Password set

	// Checking Password
	echo "123 Password ";
	echo ($customer->checkPassword('123')) ? "Correct" : "Incorrect";
	echo "<br/>";
	
	echo "12 Password ";
	echo ($customer->checkPassword('12')) ? "Correct" : "Incorrect";
	echo "<br/>";

	echo "122 Password ";
	echo ($customer->checkPassword('122')) ? "Correct" : "Incorrect";
	echo "<br/>";

	// Printing the summary
	echo $customer->getSummary();

?>

<?php
class Customer
{
	Public $customer_data = array("username", "password");
	
	// constructing the class
	Public function __construct($new_username) {
		$this->customer_data[username] = $new_username;
	}
	
	// to set customer password
	Public function setPassword($new_password) {
		$this->customer_data[password] = $new_password;
	}
	
	// To verify customer password
	Public function checkPassword($get_password) {
		return ( $this->customer_data[password]==$get_password )
		?true
		:false;
	}
	
	// Summary of customer
	Public function getSummary() {
		return "{$this->customer_data[username]} : {$this->customer_data[password]}";
	}
}

?>

<?php
class Customer{
	Public $customer_name;
	Public $customer_pass;
	
	// constructing the class
	Public function __construct($new_name){
		$this->customer_name = $new_name;
	}
	
	// to set customer password
	Public function setPassword($new_pass){
		$this->customer_pass = $new_pass;
	}
	
	// To verify customer password
	Public function checkPassword($get_pass){
		return ($this->customer_pass==$get_pass)?true:false;
	}
	
	// Summary of customer
	Public function getSummary(){
		return $this->customer_name .":".$this->customer_pass;
	}
}
?>
<?php

class Customer {
  public $customerData = array();

  // constructing the class
  public function __construct($newUsername) {
    $this->customer_data[username] = $newUsername;
  }

  // to set customer password
  public function setPassword($newPassword) {
    $this->customer_data[password] = $newPassword;
  }

  // To verify customer password
  public function checkPassword($getPassword) {
    return ($this->customer_data[password] == $getPassword);
  }

  // Summary of customer
  public function getSummary() {
    return "{$this->customerData['username']}:{$this->customerData['password']}";
  }

}

?>

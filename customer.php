<?php

class Customer {
  public $customerData = array();

  // constructing the class
  public function __construct($newUsername) {
    $this->customerData['username'] = $newUsername;
  }

  // to set customer password
  public function setPassword($newPassword) {
    $this->customerData['password'] = $newPassword;
  }

  // To verify customer password
  public function checkPassword($getPassword) {
    return ($this->customerData['password'] == $getPassword);
  }

  // Summary of customer
  public function getSummary() {
    return "{$this->customerData['username']}:{$this->customerData['password']}";
  }

}

?>

<?php

class Customer {
  public $customerData = array();
  public $dataDir = 'data/';
	public $allowedKeys = array('username', 'password', 'name', 'email', 'phone');

	public function set($key, $value) {
		if (!empty($value) && in_array($key, $this->allowedKeys)) {
			$this->customerData["$key"] = $value;
			return true;
		}
		else {
			return false;
		}
	}

	public function get($key) {
		if (in_array("$key", $this->allowedKeys)) {
			return $this->customerData["$key"];
		}
		return false;
	}	
	
  public function saveData() {
		$getUsername = $this->get('username');
    $fileName = $this->dataDir ."$getUsername.txt";
    $fileHandler = fopen($fileName, 'w') or die('Cannot open file');
    $saveContent = serialize($this->customerData);
    return fwrite($fileHandler, $saveContent);
		fclose($fileHandler);
  }
  
  public function fetchData($getUsername) {
    $customerFile = $this->dataDir ."$getUsername.txt"; 
		$fileHandler = fopen($customerFile, 'r'); 
    $readData = fread($fileHandler, 8192); 
    fclose($fileHandler);
		if ($fileHandler) {
			$this->customerData = unserialize($readData);
			return true;
		}
		else {
			return false;
		}
  }
}

?>
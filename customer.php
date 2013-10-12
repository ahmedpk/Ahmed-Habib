<?php

class Customer {
  public $customerData = array();
  public static $DATA_DIR = 'data/';
  public static $ALLOWED_KEYS = array('username', 'password', 'name', 'email', 'phone');

  public function set($key, $value) {
    if (!empty($value) && in_array($key, self::$ALLOWED_KEYS)) {
      $this->customerData[$key] = $value;
      return true;
    } else {
			return false;
		}
	}

	public function get($key) {
		if (in_array($key, self::$ALLOWED_KEYS)) {
			return $this->customerData[$key];
		} else {
			return false;
		}
	}	
	
  public function saveData() {
		$username = $this->get('username');
    $fileName = self::$DATA_DIR . $username .'txt';
    $fileHandler = fopen($fileName, 'w') or die('Cannot open file');
    $saveContent = serialize($this->customerData);
    return fwrite($fileHandler, $saveContent);
		fclose($fileHandler);
  }
  
  public function fetchData($username) {
    $customerFile = self::$DATA_DIR . $username .'txt';
		$fileHandler = fopen($customerFile, 'r'); 
    $readData = fread($fileHandler, 8192); 
    fclose($fileHandler);
		if ($fileHandler) {
			$this->customerData = unserialize($readData);
			return true;
		} else {
			return false;
		}
  }
}

?>

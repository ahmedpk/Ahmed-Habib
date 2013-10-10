<?php

require_once(dirname(__FILE__).'/customer.php');

$customer = new Customer;

if ($customer->fetchData($_GET['username'])) {
  echo 'Full Name: '.$customer->get('name').'<br/>';
  echo 'Username: '.$customer->get('username').' <br/>';
  echo 'Password: '.$customer->get('password').' <br/>';
  echo 'Email: '.$customer->get('email').' <br/>';
  echo 'Phone Number: '.$customer->get('phone').' <br/>';
}
else {
  echo 'Customer not found, please input username!!<br/>';
}

echo '<form action="/ahmed/customer_test2.php" method="get">
<input type="text" name="username"/><br/>
<input type="submit" value="Get Summary"/>
</form>';

?>
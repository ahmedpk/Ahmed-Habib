<?php

require_once(dirname(__FILE__).'/customer.php');

$customer = new Customer;

if (isset($_POST['f_submit'])) {
  if ($customer->set('username', $_POST['c_username']) && $customer->set('password', $_POST['c_password']) && $customer->set('name', $_POST['c_name']) && $customer->set('email', $_POST['c_email']) && $customer->set('phone', $_POST['c_phone'])) {
		if ($customer->saveData()) {
			echo 'Your data is saved successfully, you may find your data <a href="/ahmed/customer_test2.php?username='.$customer->get('username').'">here</a>';
		} else {
			echo 'Data was not saved for odd reasons. Try again!';
		}
  } else {
    echo 'Fields Missing!!<br/>';
  }
} else {
	echo 'Fill out the form below to add your info.';
}

?>
<form action="/ahmed/customer_test.php" method="POST">
Username: <input type="text" name="c_username"/><br/>
Password: <input type="password" name="c_password"/><hr/>
Full Name: <input type="text" name="c_name"/><br/>
Email Address: <input type="text" name="c_email"/><br/>
Phone Number: <input type="text" name="c_phone"/><br/>
<input type="submit" name="f_submit" value="Create Account"/></form>

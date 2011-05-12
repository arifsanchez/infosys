//popup login

<?php
	echo $form->create('User', array('controller' => 'Users','action' => 'user_login'));
	echo $form->input('username', array('label' => 'Username'));
	echo $form->input('password', array('label' => 'Password', 'type' => 'password'));
	echo $form->submit('Login');
	echo $form->end();
?>

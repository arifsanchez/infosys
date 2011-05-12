<?php
	echo $form->create('User', array('controller' => 'Users','action' => 'user_login'));
	echo $form->input('username', array('label' => 'Username'));
	echo $form->input('password', array('label' => 'Password'));
	#echo $form->input('remember_me', array('label' => 'Remember Me', 'type' => 'checkbox'));
	echo $form->submit('Login');
	echo $form->end();
?>

<h2><?php echo $this->pageTitle = 'Login'; ?></h2>
<?php
	echo $form->create('User', array('action' => 'login'));
	echo $form->input('username', array('label' => 'Username'));
	echo $form->input('password', array('label' => 'Password'));
	echo $form->submit('Login');
	echo $form->end();
?>

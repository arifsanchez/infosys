<?php
	echo "<h2> Step 1 : Basic Student information</h2>";

	echo $this->Form->create('Signup', array('id' => 'SignupForm', 'url' => $this->here));
	echo $this->Form->input();
	echo $this->Form->end();		

?>

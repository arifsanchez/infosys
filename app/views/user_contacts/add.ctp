<div class="userContacts form">
<?php echo $this->Form->create('UserContact');?>
	<fieldset>
		<legend><?php __('Add User Contact'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_voip_id');
		echo $this->Form->input('mobile_number');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Contacts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('controller' => 'user_voips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Voip', true), array('controller' => 'user_voips', 'action' => 'add')); ?> </li>
	</ul>
</div>
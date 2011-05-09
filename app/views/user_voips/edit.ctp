<div class="userVoips form">
<?php echo $this->Form->create('UserVoip');?>
	<fieldset>
		<legend><?php __('Edit User Voip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('friend_user_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UserVoip.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UserVoip.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Contacts', true), array('controller' => 'user_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Contact', true), array('controller' => 'user_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
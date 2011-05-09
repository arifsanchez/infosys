<div class="userFriendships form">
<?php echo $this->Form->create('UserFriendship');?>
	<fieldset>
		<legend><?php __('Add User Friendship'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('fren_userid');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Friendships', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
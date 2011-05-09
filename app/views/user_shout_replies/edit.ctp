<div class="userShoutReplies form">
<?php echo $this->Form->create('UserShoutReply');?>
	<fieldset>
		<legend><?php __('Edit User Shout Reply'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_shout_id');
		echo $this->Form->input('text');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UserShoutReply.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UserShoutReply.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Shout Replies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shouts', true), array('controller' => 'user_shouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout', true), array('controller' => 'user_shouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
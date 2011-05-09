<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Announcements', true), array('controller' => 'announcements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Announcement', true), array('controller' => 'announcements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Access Logs', true), array('controller' => 'user_access_logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Access Log', true), array('controller' => 'user_access_logs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Contacts', true), array('controller' => 'user_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Contact', true), array('controller' => 'user_contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Friendships', true), array('controller' => 'user_friendships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Friendship', true), array('controller' => 'user_friendships', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Lives', true), array('controller' => 'user_lives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Life', true), array('controller' => 'user_lives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Profiles', true), array('controller' => 'user_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile', true), array('controller' => 'user_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shout Replies', true), array('controller' => 'user_shout_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout Reply', true), array('controller' => 'user_shout_replies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shouts', true), array('controller' => 'user_shouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout', true), array('controller' => 'user_shouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('controller' => 'user_voips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Voip', true), array('controller' => 'user_voips', 'action' => 'add')); ?> </li>
	</ul>
</div>
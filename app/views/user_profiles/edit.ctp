<div class="userProfiles form">
<?php echo $this->Form->create('UserProfile');?>
	<fieldset>
		<legend><?php __('Edit User Profile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('about_me');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthday');
		echo $this->Form->input('sex_interest');
		echo $this->Form->input('relation_stat');
		echo $this->Form->input('origin');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UserProfile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UserProfile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Profiles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
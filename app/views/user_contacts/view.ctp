<div class="userContacts view">
<h2><?php  __('User Contact');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userContact['UserContact']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userContact['User']['id'], array('controller' => 'users', 'action' => 'view', $userContact['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Voip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userContact['UserVoip']['id'], array('controller' => 'user_voips', 'action' => 'view', $userContact['UserVoip']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userContact['UserContact']['mobile_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userContact['UserContact']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userContact['UserContact']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userContact['UserContact']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Contact', true), array('action' => 'edit', $userContact['UserContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Contact', true), array('action' => 'delete', $userContact['UserContact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userContact['UserContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Contacts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Contact', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('controller' => 'user_voips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Voip', true), array('controller' => 'user_voips', 'action' => 'add')); ?> </li>
	</ul>
</div>

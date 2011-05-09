<div class="userAccessLogs view">
<h2><?php  __('User Access Log');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userAccessLog['UserAccessLog']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userAccessLog['User']['id'], array('controller' => 'users', 'action' => 'view', $userAccessLog['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Referer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userAccessLog['UserAccessLog']['referer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userAccessLog['UserAccessLog']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userAccessLog['UserAccessLog']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Access Log', true), array('action' => 'edit', $userAccessLog['UserAccessLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Access Log', true), array('action' => 'delete', $userAccessLog['UserAccessLog']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userAccessLog['UserAccessLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Access Logs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Access Log', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

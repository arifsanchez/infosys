<div class="userShoutReplies view">
<h2><?php  __('User Shout Reply');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShoutReply['UserShoutReply']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userShoutReply['User']['id'], array('controller' => 'users', 'action' => 'view', $userShoutReply['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Shout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userShoutReply['UserShout']['id'], array('controller' => 'user_shouts', 'action' => 'view', $userShoutReply['UserShout']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShoutReply['UserShoutReply']['text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShoutReply['UserShoutReply']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShoutReply['UserShoutReply']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShoutReply['UserShoutReply']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Shout Reply', true), array('action' => 'edit', $userShoutReply['UserShoutReply']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Shout Reply', true), array('action' => 'delete', $userShoutReply['UserShoutReply']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userShoutReply['UserShoutReply']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shout Replies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout Reply', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shouts', true), array('controller' => 'user_shouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout', true), array('controller' => 'user_shouts', 'action' => 'add')); ?> </li>
	</ul>
</div>

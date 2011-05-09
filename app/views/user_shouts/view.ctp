<div class="userShouts view">
<h2><?php  __('User Shout');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShout['UserShout']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userShout['User']['id'], array('controller' => 'users', 'action' => 'view', $userShout['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShout['UserShout']['text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShout['UserShout']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShout['UserShout']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userShout['UserShout']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Shout', true), array('action' => 'edit', $userShout['UserShout']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Shout', true), array('action' => 'delete', $userShout['UserShout']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userShout['UserShout']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shouts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shout Replies', true), array('controller' => 'user_shout_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout Reply', true), array('controller' => 'user_shout_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related User Shout Replies');?></h3>
	<?php if (!empty($userShout['UserShoutReply'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('User Shout Id'); ?></th>
		<th><?php __('Text'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userShout['UserShoutReply'] as $userShoutReply):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userShoutReply['id'];?></td>
			<td><?php echo $userShoutReply['user_id'];?></td>
			<td><?php echo $userShoutReply['user_shout_id'];?></td>
			<td><?php echo $userShoutReply['text'];?></td>
			<td><?php echo $userShoutReply['status'];?></td>
			<td><?php echo $userShoutReply['created'];?></td>
			<td><?php echo $userShoutReply['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_shout_replies', 'action' => 'view', $userShoutReply['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_shout_replies', 'action' => 'edit', $userShoutReply['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_shout_replies', 'action' => 'delete', $userShoutReply['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userShoutReply['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Shout Reply', true), array('controller' => 'user_shout_replies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

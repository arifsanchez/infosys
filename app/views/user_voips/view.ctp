<div class="userVoips view">
<h2><?php  __('User Voip');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userVoip['UserVoip']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userVoip['User']['id'], array('controller' => 'users', 'action' => 'view', $userVoip['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Friend User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userVoip['UserVoip']['friend_user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userVoip['UserVoip']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userVoip['UserVoip']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userVoip['UserVoip']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Voip', true), array('action' => 'edit', $userVoip['UserVoip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Voip', true), array('action' => 'delete', $userVoip['UserVoip']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userVoip['UserVoip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Voip', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Contacts', true), array('controller' => 'user_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Contact', true), array('controller' => 'user_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related User Contacts');?></h3>
	<?php if (!empty($userVoip['UserContact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('User Voip Id'); ?></th>
		<th><?php __('Mobile Number'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userVoip['UserContact'] as $userContact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userContact['id'];?></td>
			<td><?php echo $userContact['user_id'];?></td>
			<td><?php echo $userContact['user_voip_id'];?></td>
			<td><?php echo $userContact['mobile_number'];?></td>
			<td><?php echo $userContact['email'];?></td>
			<td><?php echo $userContact['created'];?></td>
			<td><?php echo $userContact['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_contacts', 'action' => 'view', $userContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_contacts', 'action' => 'edit', $userContact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_contacts', 'action' => 'delete', $userContact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Contact', true), array('controller' => 'user_contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

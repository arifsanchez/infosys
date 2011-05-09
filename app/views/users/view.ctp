<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Announcements');?></h3>
	<?php if (!empty($user['Announcement'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Announcement'] as $announcement):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $announcement['id'];?></td>
			<td><?php echo $announcement['user_id'];?></td>
			<td><?php echo $announcement['title'];?></td>
			<td><?php echo $announcement['content'];?></td>
			<td><?php echo $announcement['created'];?></td>
			<td><?php echo $announcement['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'announcements', 'action' => 'view', $announcement['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'announcements', 'action' => 'edit', $announcement['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'announcements', 'action' => 'delete', $announcement['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $announcement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Announcement', true), array('controller' => 'announcements', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Access Logs');?></h3>
	<?php if (!empty($user['UserAccessLog'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Referer'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserAccessLog'] as $userAccessLog):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userAccessLog['id'];?></td>
			<td><?php echo $userAccessLog['user_id'];?></td>
			<td><?php echo $userAccessLog['referer'];?></td>
			<td><?php echo $userAccessLog['created'];?></td>
			<td><?php echo $userAccessLog['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_access_logs', 'action' => 'view', $userAccessLog['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_access_logs', 'action' => 'edit', $userAccessLog['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_access_logs', 'action' => 'delete', $userAccessLog['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userAccessLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Access Log', true), array('controller' => 'user_access_logs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Contacts');?></h3>
	<?php if (!empty($user['UserContact'])):?>
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
		foreach ($user['UserContact'] as $userContact):
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
<div class="related">
	<h3><?php __('Related User Friendships');?></h3>
	<?php if (!empty($user['UserFriendship'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Fren Userid'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserFriendship'] as $userFriendship):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userFriendship['id'];?></td>
			<td><?php echo $userFriendship['user_id'];?></td>
			<td><?php echo $userFriendship['fren_userid'];?></td>
			<td><?php echo $userFriendship['status'];?></td>
			<td><?php echo $userFriendship['created'];?></td>
			<td><?php echo $userFriendship['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_friendships', 'action' => 'view', $userFriendship['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_friendships', 'action' => 'edit', $userFriendship['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_friendships', 'action' => 'delete', $userFriendship['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userFriendship['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Friendship', true), array('controller' => 'user_friendships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Lives');?></h3>
	<?php if (!empty($user['UserLife'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Belief'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserLife'] as $userLife):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userLife['id'];?></td>
			<td><?php echo $userLife['user_id'];?></td>
			<td><?php echo $userLife['belief'];?></td>
			<td><?php echo $userLife['created'];?></td>
			<td><?php echo $userLife['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_lives', 'action' => 'view', $userLife['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_lives', 'action' => 'edit', $userLife['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_lives', 'action' => 'delete', $userLife['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userLife['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Life', true), array('controller' => 'user_lives', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Profiles');?></h3>
	<?php if (!empty($user['UserProfile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('About Me'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Sex Interest'); ?></th>
		<th><?php __('Relation Stat'); ?></th>
		<th><?php __('Origin'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserProfile'] as $userProfile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userProfile['id'];?></td>
			<td><?php echo $userProfile['user_id'];?></td>
			<td><?php echo $userProfile['about_me'];?></td>
			<td><?php echo $userProfile['gender'];?></td>
			<td><?php echo $userProfile['birthday'];?></td>
			<td><?php echo $userProfile['sex_interest'];?></td>
			<td><?php echo $userProfile['relation_stat'];?></td>
			<td><?php echo $userProfile['origin'];?></td>
			<td><?php echo $userProfile['first_name'];?></td>
			<td><?php echo $userProfile['last_name'];?></td>
			<td><?php echo $userProfile['created'];?></td>
			<td><?php echo $userProfile['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_profiles', 'action' => 'view', $userProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_profiles', 'action' => 'edit', $userProfile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_profiles', 'action' => 'delete', $userProfile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Profile', true), array('controller' => 'user_profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Shout Replies');?></h3>
	<?php if (!empty($user['UserShoutReply'])):?>
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
		foreach ($user['UserShoutReply'] as $userShoutReply):
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
<div class="related">
	<h3><?php __('Related User Shouts');?></h3>
	<?php if (!empty($user['UserShout'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Text'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserShout'] as $userShout):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userShout['id'];?></td>
			<td><?php echo $userShout['user_id'];?></td>
			<td><?php echo $userShout['text'];?></td>
			<td><?php echo $userShout['status'];?></td>
			<td><?php echo $userShout['created'];?></td>
			<td><?php echo $userShout['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_shouts', 'action' => 'view', $userShout['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_shouts', 'action' => 'edit', $userShout['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_shouts', 'action' => 'delete', $userShout['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userShout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Shout', true), array('controller' => 'user_shouts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related User Voips');?></h3>
	<?php if (!empty($user['UserVoip'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Friend User Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserVoip'] as $userVoip):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userVoip['id'];?></td>
			<td><?php echo $userVoip['user_id'];?></td>
			<td><?php echo $userVoip['friend_user_id'];?></td>
			<td><?php echo $userVoip['status'];?></td>
			<td><?php echo $userVoip['created'];?></td>
			<td><?php echo $userVoip['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'user_voips', 'action' => 'view', $userVoip['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'user_voips', 'action' => 'edit', $userVoip['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'user_voips', 'action' => 'delete', $userVoip['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userVoip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Voip', true), array('controller' => 'user_voips', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

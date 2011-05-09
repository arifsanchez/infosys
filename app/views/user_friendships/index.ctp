<div class="userFriendships index">
	<h2><?php __('User Friendships');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('fren_userid');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userFriendships as $userFriendship):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userFriendship['UserFriendship']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userFriendship['User']['id'], array('controller' => 'users', 'action' => 'view', $userFriendship['User']['id'])); ?>
		</td>
		<td><?php echo $userFriendship['UserFriendship']['fren_userid']; ?>&nbsp;</td>
		<td><?php echo $userFriendship['UserFriendship']['status']; ?>&nbsp;</td>
		<td><?php echo $userFriendship['UserFriendship']['created']; ?>&nbsp;</td>
		<td><?php echo $userFriendship['UserFriendship']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userFriendship['UserFriendship']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userFriendship['UserFriendship']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userFriendship['UserFriendship']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userFriendship['UserFriendship']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Friendship', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
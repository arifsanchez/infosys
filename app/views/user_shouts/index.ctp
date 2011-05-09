<div class="userShouts index">
	<h2><?php __('User Shouts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('text');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userShouts as $userShout):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userShout['UserShout']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userShout['User']['id'], array('controller' => 'users', 'action' => 'view', $userShout['User']['id'])); ?>
		</td>
		<td><?php echo $userShout['UserShout']['text']; ?>&nbsp;</td>
		<td><?php echo $userShout['UserShout']['status']; ?>&nbsp;</td>
		<td><?php echo $userShout['UserShout']['created']; ?>&nbsp;</td>
		<td><?php echo $userShout['UserShout']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userShout['UserShout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userShout['UserShout']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userShout['UserShout']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userShout['UserShout']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Shout', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Shout Replies', true), array('controller' => 'user_shout_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Shout Reply', true), array('controller' => 'user_shout_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>
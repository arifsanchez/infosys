<div class="userContacts index">
	<h2><?php __('User Contacts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('user_voip_id');?></th>
			<th><?php echo $this->Paginator->sort('mobile_number');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userContacts as $userContact):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userContact['UserContact']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userContact['User']['id'], array('controller' => 'users', 'action' => 'view', $userContact['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userContact['UserVoip']['id'], array('controller' => 'user_voips', 'action' => 'view', $userContact['UserVoip']['id'])); ?>
		</td>
		<td><?php echo $userContact['UserContact']['mobile_number']; ?>&nbsp;</td>
		<td><?php echo $userContact['UserContact']['email']; ?>&nbsp;</td>
		<td><?php echo $userContact['UserContact']['created']; ?>&nbsp;</td>
		<td><?php echo $userContact['UserContact']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userContact['UserContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userContact['UserContact']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userContact['UserContact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userContact['UserContact']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Contact', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Voips', true), array('controller' => 'user_voips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Voip', true), array('controller' => 'user_voips', 'action' => 'add')); ?> </li>
	</ul>
</div>
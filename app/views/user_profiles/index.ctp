<div class="userProfiles index">
	<h2><?php __('User Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('about_me');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('birthday');?></th>
			<th><?php echo $this->Paginator->sort('sex_interest');?></th>
			<th><?php echo $this->Paginator->sort('relation_stat');?></th>
			<th><?php echo $this->Paginator->sort('origin');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userProfiles as $userProfile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userProfile['UserProfile']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $userProfile['User']['id'])); ?>
		</td>
		<td><?php echo $userProfile['UserProfile']['about_me']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['gender']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['birthday']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['sex_interest']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['relation_stat']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['origin']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['first_name']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['last_name']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['created']; ?>&nbsp;</td>
		<td><?php echo $userProfile['UserProfile']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userProfile['UserProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userProfile['UserProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userProfile['UserProfile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userProfile['UserProfile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Profile', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
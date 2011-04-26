<?php if( $access->isLoggedIn() ): // Menu untuk user ?>
<div class ='nav' >
<ul id='right'>
	<?php if( $access->check('Pages/display') ): ?>
		<li><?php echo $this->Html->link('Home', '/', 
					array('class' => $access->isSelected('Pages','display') )); ?></li>
	<?php endif; ?>

	<?php if( $access->check('Announcements/index') ): ?>	
		<li><?php echo $this->Html->link('Announcements', 	'/announcements/index', 
					array('class' => $access->isSelected('Announcements') )); ?></li>
	<?php endif; ?>
	
	<?php if( $access->check('groups/index') ): ?>
		<li><?php echo $this->Html->link('Groups', 	'/groups/index', 
					array('class' => $access->isSelected('Groups') )); ?></li>
	<?php endif; ?>
	
	<?php if( $access->check('users/index') ): ?>
		<li><?php echo $this->Html->link('Users', 	'/users/index', 	
					array('class' => $access->isSelected('user') )); ?></li>
	<?php endif; ?>
	
	<?php if( $access->check('Securities/index') ): ?>
		<li><?php echo $this->Html->link('Securities', 	'/securities/index', 	
					array('class' => $access->isSelected('security') )); ?></li>
	<?php endif; ?>	
</ul>	
<span id='left' class='usercp'>
<h1><?php echo $this->Html->link(__('InfoSYS', true), array('controller' => 'pages', 'action' => 'display')); ?></b><?php echo " : ".$title_for_layout; ?></h1>
Logged in as <strong><?php echo $access->my('username');?></strong>
<?php #echo $this->Html->link('My Account', '/users/my_account'); ?> |
<?php echo $this->Html->link('Logout', '/users/logout'); ?>
</span>
</div>

<?php else: // menu untuk Public ?>
<div class ='nav' >
<ul id='right'>
	<li><?php echo $this->Html->link('Home', '/'); ?></li>
	<li><?php echo $this->Html->link('Register', '/users/register' ); ?></li>
	<li><?php echo $this->Html->link('Login', '/users/login'); ?></li>
</ul>	
<span id='left' class='usercp'>
InfoSYS Control Panel
</span>
</div>
<?php endif; ?>

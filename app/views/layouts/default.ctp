<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('InfoSYS:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><b><?php echo $this->Html->link(__('InfoSYS', true), array('controller' => 'pages', 'action' => 'home')); ?></b><?php echo " : ".$title_for_layout; ?>
			<? if(!empty($username)) { ?>
			<span style="font-size:12px;color:#000;">[
				<? echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
			]</span>
			<? } ?>	
			</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('bake_by_arif.gif', array('alt'=> __('Bake By Arif', true), 'border' => '0')),
					'http://github.com/arifsanchez/infosys',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>

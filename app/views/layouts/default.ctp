<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('InfoSys:'); ?>
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
			<?php echo $this->element('top_menu');?>
		</div>
		<?php 
			if($this->params['controller'] == 'pages'){
				echo "<div id=\"pages\">";
			} else {
				echo "<div id=\"content\">";
			}
			
			echo $this->Session->flash();
			echo $this->Session->flash('auth');

			echo $content_for_layout; 
		?>

		</div>
	</div>
	
	<div id="footer_logo">
	<?php echo $this->Html->link(
		$this->Html->image('bake_by_arif.gif', array('alt'=> __('Bake By Arif', true), 'border' => '0')),
		'http://reachout.me/arif',
		array('target' => '_blank', 'escape' => false)
	);?>
	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>

<?php $default = null; ?>
			
<div class="index">
<fieldset>
<legend>Security Access for <?php echo $name; ?></legend>
<?php echo $form->create( array( 'url' => '/groups/security/'.$this->data['Group']['id'] ) ); ?>

<table  style="padding:5px">
<?php foreach( array_chunk($aco_records, $column = 3) as $row): ?>
	<tr>
		<?php foreach( $row as $k=>$aco):?>
		<td style="background-color:#dddddd;border: 1px #999 solid;width:<?php echo round(100/$column);?>%">
		<h3><?php echo $aco['Aco']['alias']; ?></h3>
		
		<table>
		<th>
		Action
		</th>
		<th style="width:50px">
        Choice
		</th>
		<?php foreach($aco['Aco']['actions'] as $action):
		#debug($action);
		$aros = $action['Aro'];
		#echo $current_alias;
		foreach($aros as $aro){
		
			# check kalau Aro == CurrentAlias
			if($aro['alias'] == $current_alias){
		
				# check semua permission
				 if (   ( $aro[ 'Permission' ][ '_create' ] == 1 ) &&
						( $aro[ 'Permission' ][ '_read' ] == 1 ) &&
						( $aro[ 'Permission' ][ '_update' ] == 1 ) &&
						( $aro[ 'Permission' ][ '_delete' ] == 1 )
					) {
                            $default = 'allow';
                            #break;
                } else {
                            $default = 'deny';
                            #break;
                }
			}
		}
		
		?>
			
		<tr>
		<td>
		<?php echo $action['Aco']['alias']; ?>
		</td>
		<td style="width:100px;text-align:center">
		<?php
		$options = array(
					'allow' => '<span style="color:green;font-weight:bold">allow</span>',
					'deny' => '<span style="color:red;font-weight:bold">deny</span>',
					);
				
		echo $form->input('Group.SecurityAccess.'.$action['Aco']['id'], array(
			'type' =>'radio',
			'options' => $options,
			'legend' => false,
			'default' => $default,
			'div' => false,
			'before' => '<small>',
			'after' => '</small>',
		));		
		#echo $default;
		
		?>
		</td>
	
		</tr>
		<?php endforeach; ?>
		</table>
		
		</td>
		<?php endforeach ?>
	</tr>
<?php endForeach ?>
</table>
<?php
	$id = $this->data['Group']['id'];
    echo $form->input( 'Group.id', array('value' => $id, 'type' => 'hidden' ));
	echo $form->end( array( 'label' => 'Assign Access', 'div' => false ) );
?>
</fieldset>
</div>

<div class="actions">
<h3>Actions</h3>
<ul>
	<li><?php echo $html->link('Group List','/groups');?></li>
	<li><?php echo $html->link('Access List','/securities');?></li>
</ul>
</div>

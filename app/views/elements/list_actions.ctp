<table>
<?php foreach (array_chunk($actions, 3) as $row){ ?>
<tr>
<?php
	foreach ( $row as $current_action_group ) {
    echo '<td><table>';
        $action_name = $current_action_group[ 'name' ];
        $action_name_singular = $current_action_group[ 'name_singular' ];
        $all_actions = $current_action_group[ 'actions' ];
        
		
        echo '<tr><th><h3>'.$action_name.'</h3></th><th></th></tr>';
        
        foreach ( $all_actions as $clean ) {
               
            $action_value_1 = $action_name_singular.'__'.$clean;
            $action_value_2 = $action_name.'__'.$clean;
        
            echo '<tr>';
            echo '<td>';
            
	            if ( isset( $aco_list[ $action_value_1 ] ) ) {
					echo '<span style="margin-left:10px;font-weight:bold;color:green">';
						echo Inflector::humanize($clean);
					echo '</span>';
	            } else {
					echo '<span style="margin-left:10px;font-weight:bold;color:red">';
							echo Inflector::humanize($clean);
					echo '</span>';	
	            }
	          
              
            echo '</td>';
            
            if ( isset( $aco_list[ $action_value_1 ] ) ) {

                echo '<td style="width:70px;font-size:10px">Delete ';				
				echo $form->input( 'Actions.SecurityAccess.'. $action_value_2,
										array(  'type' => 'checkbox',
												'label' => false,
												'div'  => false,
												'value' => 'delete',
												'checked' => null ));
												
                echo '</td>';                                                
            }
            else {
                
                echo '<td style="width:50px;font-size:10px">Add ';
				echo $form->input( 'Actions.SecurityAccess.'. $action_value_2,
										array(  'type' => 'checkbox',
												'label' => false,
												'div'  => false,
												'value' => 'include',
												'checked' => true ));
							
                echo '</td>';                                                   
            }     
            
            echo '</tr>';       
        }
	echo '</table></td>';	
	}	
	echo '</tr>';       
}  
    
?>
</table>

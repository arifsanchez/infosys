<?php echo $form->create(array('url' => '/securities/index'));  ?>
<?php echo $this->element('list_actions', array('actions' => $actions)); ?>
<?php echo $form->end( array( 'label' => 'Submit', 'div' => false ) ); ?>

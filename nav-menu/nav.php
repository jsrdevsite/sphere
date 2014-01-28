<?php
//fire up the plugin on submit
if( isset( $_POST['submit_jsr_custom_nav'] ) && $_POST['submit_jsr_custom_nav'] == 'submit_jsr_custom_nav' ) {
	
	$args = array(
		'editor1' => $_POST['editor1'],
		'editor2' => $_POST['editor2'],
		'editor3' => $_POST['editor3'],
		'editor4' => $_POST['editor4']
	);
	
	$jsr_nav_control = new JSRCustomNavControl;
	$jsr_nav_control->save_me( $args );
		
}
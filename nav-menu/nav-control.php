<?php
class JSRCustomNavControl extends JSRCustomNavDatabase {
	
	function __construct() {
	
		//initialize database items/control
		parent::__construct();
		
	}
	
		
	/*************************************************
	*	create database on activation
	*************************************************/
	
	//create database on initialize
	public function initialize() {
	
		parent::create_database();
		
	}
	
	/*************************************************
	*	Saving and Retrieving of Content
	*************************************************/
	public function save_me( $args ) {
		
		global $wpdb;
		
		//table name
		$table_name = $this->get_table_name();
		
		
		$editor1 = array(
			'name' => 'editor1',
			'content' => $args['editor1']
		);
		
		$editor2 = array(
			'name' => 'editor2',
			'content' => $args['editor2']
		);
		
		$editor3 = array(
			'name' => 'editor3',
			'content' => $args['editor3']
		);
		
		$editor4 = array(
			'name' => 'editor4',
			'content' => $args['editor4']
		);
		
		//update
		$test = $wpdb->update( $table_name, $editor1, array( 'name' => $editor1['name'] ), array( '%s', '%s' ), array( '%s' )  );
		$wpdb->update( $table_name, $editor2, array( 'name' => $editor2['name'] ), array( '%s', '%s' ), array( '%s' ) );
		$wpdb->update( $table_name, $editor3, array( 'name' => $editor3['name'] ), array( '%s', '%s' ), array( '%s' )  );
		$wpdb->update( $table_name, $editor4, array( 'name' => $editor4['name'] ), array( '%s', '%s' ), array( '%s' )  );
		
		
	}
	
	public function fetch_me( $name ) {
		
		global $wpdb;
		
		//table name
		$table_name = $this->get_table_name();
		
		//build the query
		$sql = "SELECT * FROM $table_name WHERE name LIKE '$name'";
	
		//start query
		$result = $wpdb->get_results($sql, ARRAY_A);
		
		return $result[0]['content'];
		
	}
	
	/********************************************
	*	Debugging Codes
	********************************************/
	
	//for debugging purposes
	public function print_this( $item ) {
		echo "<hr/><pre>";
			print_r( $item );
		echo "</pre><hr/>";
	}
	
	
}


?>
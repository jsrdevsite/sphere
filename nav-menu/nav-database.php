<?php

class JSRCustomNavDatabase {
	
	private $table_name = "";
	
	function __construct() {
		$this->set_table_names();
	}
	
	protected function create_database() {
		global $wpdb;
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			
		if ( ! empty($wpdb->charset) )
            $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
        if ( ! empty($wpdb->collate) )
            $charset_collate .= " COLLATE $wpdb->collate";
            
		//------ USERS -----------------------------------------------
		$table_name = $this->get_table_name();
		
		$sql = "CREATE TABLE " . $table_name . " (
		  id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
		  name varchar(50) NOT NULL,
		  content longtext NOT NULL,
		  PRIMARY KEY  (id),
		  UNIQUE KEY id (id)
		) $charset_collate;";
		
		dbDelta($sql);
		
		$this->insert_default_values();
	}
	
	private function set_table_names() {
		global $wpdb;
		
		$this->table_name = 'wp_jsr_custom_nav';
	}
	

	protected function get_table_name() {
		return $this->table_name;
	}
	
	private function insert_default_values() {
	
		global $wpdb;
	
		//table name
		$table_name = $this->get_table_name();
		
		$editor1 = array(
			'name' => 'editor1',
			'content' => '',
		);
		
		$editor2 = array(
			'name' => 'editor2',
			'content' => '',
		);
		
		$editor3 = array(
			'name' => 'editor3',
			'content' => '',
		);
		
		$editor4 = array(
			'name' => 'editor4',
			'content' => '',
		);
		
		$rows_affected = $wpdb->insert( $table_name, $editor1 );
		$rows_affected = $wpdb->insert( $table_name, $editor2 );
		$rows_affected = $wpdb->insert( $table_name, $editor3 );
		$rows_affected = $wpdb->insert( $table_name, $editor4 );
	}
	
}

?>
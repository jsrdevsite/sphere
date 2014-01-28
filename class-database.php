<?php

class IntentionDatabase {
	
	function __construct() {

	}
	
	function create_database() {
		global $wpdb;
		
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			
		if ( ! empty($wpdb->charset) )
            $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";
        if ( ! empty($wpdb->collate) )
            $charset_collate .= " COLLATE $wpdb->collate";
        
        //activity log    		
		$sql = "CREATE TABLE `wp_jsr_activity_log` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `user_id` mediumint(9) NOT NULL,
		  `activity` text NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
		
		//intention
		$sql = "CREATE TABLE `wp_jsr_intention` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `userid` mediumint(9) NOT NULL,
		  `intention` longtext NOT NULL,
		  `sphere` text NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
		
		
		//recent intentions
		$sql = "CREATE TABLE `wp_jsr_recent` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `sphere` text NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
		
		//support
		$sql = "CREATE TABLE `wp_jsr_support` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `userid` mediumint(9) NOT NULL,
		  `receiverid` mediumint(9) NOT NULL,
		  `support` longtext NOT NULL,
		  `with_video` text NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
		
		//user info
		$sql = "CREATE TABLE `wp_jsr_user_info` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `firstname` varchar(50) NOT NULL,
		  `lastname` varchar(50) NOT NULL,
		  `email` varchar(50) NOT NULL,
		  `wpuser` varchar(50) NOT NULL,
		  `gender` varchar(6) NOT NULL,
		  `avatar` text NOT NULL,
		  `sphere` longtext NOT NULL,
		  `donation` float NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
		
		//user points
		$sql = "CREATE TABLE `wp_jsr_user_points` (
		  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
		  `userid` mediumint(9) NOT NULL,
		  `intentions` mediumint(9) NOT NULL,
		  `support` mediumint(9) NOT NULL,
		  `victories` mediumint(9) NOT NULL,
		  `compassion` mediumint(9) NOT NULL,
		  `forgiveness` mediumint(9) NOT NULL,
		  PRIMARY KEY (`id`)
		) $charset_collate;";
		
		dbDelta($sql);
	}
	
}

?>
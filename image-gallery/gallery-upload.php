<?php

global $wpdb;

/*
mysql_query("CREATE TABLE IF NOT EXISTS `wp_gallery_image` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");
*/

$del = $_POST['del'];

if( $del ) {
	
	foreach($del as $d)	{
		$row = $wpdb->get_row("select * from wp_gallery_image where id = $d");
		$path =  dirname(__FILE__).$row->image;
		//echo $d;
		
		$row = mysql_query("DELETE FROM wp_gallery_image where id = $d") or die(mysql_error());
		if($row->image){unlink($path);}
	}
	
}


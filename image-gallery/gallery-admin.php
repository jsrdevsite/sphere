<?php
function gallery_option() {
	
	global $wpdb;
?>
	<div class="wrap cu-wrap">
	
	<style type="text/css">
		.upload-form {
			float:left;
			width:100%;
		}
		
		.upload-form form {
			width:auto;
			float:left;
			border:1px solid;
			padding:5px;
			border-radius:5px;
		}
		
		.sub {
		    background: none repeat scroll 0 0 #B2B2B2;
		    border: medium none;
		    border-radius: 5px;
		    color: #FFFFFF;
		    padding: 5px 7px;
			cursor:pointer;
		}
		
		.sub:hover {
			background:#000;
		}
		
		.td-col {
			width:23%;
			padding:0px;
			border:1px solid #b3b3b3;
		}
		
	</style>
	
	<div class="upload-form">
	
		<form action="" method="post" enctype="multipart/form-data">
		
			<label for="file"><h3>Select Files:</h3></label>
			<input type="file" accept="image/*" multiple name="file[]" id="file">
		
			<input type="submit" class="sub" name="submit" value="Upload">
			
		</form>
	</div>

<?php
	$file = $_FILES['file']['name'];

	if($file) {
		
		foreach($file as $key=>$files) {
		
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"][$key]);
			$extension = end($temp);
			
			if ((($_FILES["file"]["type"][$key] == "image/gif")
				|| ($_FILES["file"]["type"][$key] == "image/jpeg")
				|| ($_FILES["file"]["type"][$key] == "image/jpg")
				|| ($_FILES["file"]["type"][$key] == "image/pjpeg")
				|| ($_FILES["file"]["type"][$key] == "image/x-png")
				|| ($_FILES["file"]["type"][$key] == "image/png"))
			
			&& in_array($extension, $allowedExts)) {
			
					if ($_FILES["file"]["error"][$key] > 0) {
				    echo "Return Code: " . $_FILES["file"]["error"][$key] . "<br>";
				}
					
					else {
			
			  	 		if (file_exists(dirname(__FILE__)."/uploads/" . $_FILES["file"]["name"][$key])) {
				      		echo $_FILES["file"]["name"][$key] . " already exists.<br/> ";
						}
				
					else {
			
			  			$file = move_uploaded_file($_FILES["file"]["tmp_name"][$key],
							dirname(__FILE__)."/uploads/" . $_FILES["file"]["name"][$key]);
			
						  	$path = "/uploads/" . $_FILES["file"]["name"][$key];
					 	
				 		  mysql_query("INSERT INTO wp_gallery_image (id, image, file_name) values ('','".$path."','".$_FILES["file"]["name"][$key]."')");
						}
				}
				
			}
				
			else {
			  echo "Invalid file";
			} 		
	 	}
 	}
 
	$result = $wpdb->get_results("select DISTINCT file_name,id, image from wp_gallery_image");
	$row = count($result);
	$num_col = ceil($row/4);
 
	if($row) {
		
		echo "<form action='' method=\"post\" name = 'form1'style=\"width:97%; margin-top:10px;\">";
		echo "<input type='button' class='sub' onclick = 'sub();' name='send' value='Delete Selected'/>";$i = 1;
		echo "<table cellpadding ='10' width='100%'>";
		
		foreach($result as $key=>$r) {
			 
			 if($i == 1): 
			 
			 	echo "<td class='td-col' style='float:left;'><table cellpadding='5' cellspacing='10' style='float:left;'>";
				echo "<th>ID</th><th>Image</th><th>Sel</th>";
				
			endif;
			
				$k = 0;
				$id = $key+1;
				$path = plugins_url('gallery-image-option').$r->image;
				
				$id = $key+1;
				$path = plugins_url('',__FILE__).$r->image;
				$path_url = plugins_url('sphere')."/timthumb/timthumb.php?src=".$path."&h=45&w=90&zc=1&q=100";
				
				echo "<tr><td>$id</td><td><img src = '$path_url' width='100' /></td><td align='center'><input type='checkbox' name='del[]' value='$r->id'/></td></tr>";
				 
				if($i == $num_col) : 
					echo "</table></td>"; 
					$i = 0; 
					$k =1; 
				endif; 
				
				$i++;
		}
		
		if($k==0) echo "</table></td>";
		echo "";
		
		echo "</table></form>";
	}

?>

	<script>
		function sub() {
			var conf = confirm("Are you sure you want to delete this items");
			if(conf == true)
			{
				document.form1.submit();
			}
		}
		
	</script>
</div>

<?php }?>
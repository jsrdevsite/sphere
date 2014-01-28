<?php

function jsr_custom_menu_manager() {

	$jsr_nav_control = new JSRCustomNavControl;
?>

	<div class="wrap">
		<div id="icon-options-general" class="icon32"><br /></div>
		<H2>Custom Nav Menus</H2>
		<H3>Common settings</H3>
	</div>
	
	<div style="width:90%;padding:0px 0px 0px 50px;">
		<form name="menu" id="menu" method="post" enctype="multipart/form-data">
			<table width="100%">
				<tr>
					<td align="left" style="padding-bottom:25px;">
						
						<label style="font-weight:700;">Logo Nav Menu</label>			
						<textarea name="editor1" id="editor" style="height:200px; width:100%;"><?php echo $jsr_nav_control->fetch_me( 'editor1' ); ?></textarea>
					</td>
					
					<td align="left" style="padding-bottom:25px;">
						
						<label style="font-weight:700;">My Agreement Nav Menu</label>			
						<textarea name="editor2" id="editor" style="height:200px; width:100%;"><?php echo $jsr_nav_control->fetch_me( 'editor2' ); ?></textarea>
					</td>
				</tr>
				
				<tr>
					<td align="left">
						
						<label style="font-weight:700;">Intention Form</label>			
						<textarea name="editor3" id="editor3" style="height:200px; width:100%;"><?php echo $jsr_nav_control->fetch_me( 'editor3' ); ?></textarea>
					</td>
					
					<td align="left">
						
						<label style="font-weight:700;">Login / Logout Menu</label>			
						<textarea name="editor4" id="editor4" style="height:200px; width:100%;"><?php echo $jsr_nav_control->fetch_me( 'editor4' ); ?></textarea>
					</td>
				</tr>
			
				<tr>
					<td align="left">
						<input type="submit" value="Submit">
						<input type="hidden" name="submit_jsr_custom_nav" value="submit_jsr_custom_nav" />
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php
}
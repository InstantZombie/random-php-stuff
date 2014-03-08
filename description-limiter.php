<!-- This is a description limiter I used for descriptions on the behance's api for when they got to long for the design -->
<?php 
	
	$shortDesc = (strlen($description) > 100) ? substr($description, 0, 100) . '...' : $description; 

?>
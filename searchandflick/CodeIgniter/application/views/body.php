<?php 
	echo "<div class='list'>";
	foreach($rows as $d) {
	echo $d->user_name . "=>";
	echo " ";
	echo $d->user_fullname;
	echo " ";
	echo " <a href=?action=details&id=".$d->user_id. ">details</a>";
	echo "<br>";
	}; 
	?>

</div>
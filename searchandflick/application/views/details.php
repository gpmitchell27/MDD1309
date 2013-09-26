<?php
var_dump($d_rows);
echo "<div class='list'>";
foreach($d_rows as $d){

	echo " <b>Email: </b>";
	echo $d->user_email;
	echo "<br>";
	echo " <b>Phone: </b>";
	echo $d->user_phone;
	echo "<br>";
	echo " <b>Address: </b>";
	echo $d->user_address;
	echo "<br>";
}
?>
</div>
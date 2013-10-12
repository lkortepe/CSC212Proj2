<?php 
	$con = mysql_connect("localhost","root","lpass"); 
	mysql_select_db("210proj2", $con);
		
	$data = "INSERT INTO page3 (date, time, speaker, subject, dept, location, contact, details)
						VALUES ('$_POST[date]','$_POST[time]','$_POST[speaker]',
						'$_POST[subject]','$_POST[dept]','$_POST[location]',
						'$_POST[email]','$_POST[details]')";

	$result = mysql_query($data, $con);
?>
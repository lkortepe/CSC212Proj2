<?php 
	$con = mysql_connect("localhost","root","lpass"); 
	mysql_select_db("210proj2", $con);
		
	$data = "INSERT INTO page3 (date, time, speaker, subject, dept, location, contact, details)
						VALUES ('$_POST[date]','$_POST[time]','$_POST[speaker]',
						'$_POST[subject]','$_POST[dept]','$_POST[location]',
						'$_POST[email]','$_POST[details]')";

	$result = mysql_query($data, $con);
?>
<meta http-equiv="refresh" content="3; 
	url=http://ec2-50-17-34-58.compute-1.amazonaws.com/210Work/Project2/index.php">

<div id='page4'>
	<p>Thank you for your submission!</p>
	<p>Page will redirect to view listing in 3 seconds</p>
	<p>Or click <a href = "index.php">here</a> to manually view your submission</p>
</div>
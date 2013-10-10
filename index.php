<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Speaker Events</title>
</head>

<body>

<div id="header"><!--contains heading and submit button-->
<h1>Speaker Events</h1>
<button type="button">Create New Event</button>
</div>

<div id="listing"><!--contains the table of events-->

<table>
	<tr>
		<td>Date</td>
		<td>Time</td>
		<td>Speaker</td>
		<td>Subject</td>
		<td>Dept</td>
		<td>Location</td>
		<td>Contact</td>
		<td>Details</td>
	</tr>
	<tr>
		<td>12/25/1776</td>
		<td>12:00am</td>
		<td>George Washington</td>
		<td>Independence</td>
		<td>War</td>
		<td>Trenton, NJ</td>
		<td>Messenger</td>
		<td>Prepare to Attack</td>
	</tr>";

<?php
	$rows = 2; //number of rows
	$cols = 8; //number of columns
	
	for($tr = 1; $tr <= $rows; $tr++) {
		echo "<tr>";
		for($td = 1; $td <= $cols; $td++) {
			echo "<td>row: ".$tr." column: ".$td."</td>";
		}
		echo "</tr>";
	}
	
	echo "</table>"; //END ECHO
?> <!--end php-->
</div><!--end listing div-->

</body>
</html>

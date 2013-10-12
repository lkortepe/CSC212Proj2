<?php
    $con = mysql_connect("localhost", "root", "lpass");
    mysql_select_db("210proj2", $con);

    $result = mysql_query("SELECT *
			FROM page3
                     ORDER BY date ASC;");
?>

<table>
	<tr>
		<th>Date</th>
		<th>Time</th>
		<th>Speaker</th>
		<th>Subject</th>
		<th>Deptartment</th>
		<th>Location</th>
		<th>Contact</th>
		<th>Details</th>
	</tr>

<?php
	    while($row = mysql_fetch_array($result)){
 
		echo "<tr>
			<td>". $row['date'] . "</td>
			<td>" . $row['time'] . "</td>
			<td>" . $row['speaker'] . "</td>
			<td>" . $row['subject'] . "</td>
			<td>" . $row['dept'] . "</td>
			<td>" . $row['location'] . "</td>
			<td>" . $row['contact'] . "</td>
			<td>" . $row['details'] . "</td>
		</tr>";
	    }
?>
	</table>
<!--PHP page with HTML base, pulls postings from MySQL database-->

<!DOCTYPE html>
<html>

<head>
<title>Speaker Events</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div id="header1"><!--contains heading and submit button-->
	<h1>University of Rochester Seminar Calendar</h1>
</div>

<div id="page2link">
	<a href="page2.html">Create New Event</a>
</div>

	<div id="listing"><!--contains the table of events-->

	<p><?php
		include 'events.php';
	?></p>

	</div><!--end listing div-->
</body>
</html>

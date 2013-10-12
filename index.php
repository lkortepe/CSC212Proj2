<!DOCTYPE html>
<html>

<head>
<title>Speaker Events</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<div id="header"><!--contains heading and submit button-->
<h1>Speaker Events</h1>
<a href="page2.html">Create New Event</a>
</div>

<div id="listing"><!--contains the table of events-->

	<p><?php
		include 'events.php';
	?></p>

</div><!--end listing div-->

</body>
</html>

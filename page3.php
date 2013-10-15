<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
	<title>Submit Event</title>
	<link rel="stylesheet" href="styles.css"/>
</head>

<body>

<?php 
	$netid = $_POST["netid"];
?>
<div id="header3">	
	<h1>Submit an Event</h1>
	<h2>Add your department's event to the UofR Seminar Calendar <?php echo $netid ?>!</h2>
	<h2>Please fill out the form exactly as specified, All fields are required</h2>
</div>

<div id="form">
<form action="page4.php" method="post">

<fieldset>
<legend>Logistics</legend>
<div>
  <label>Date (yyyy-mm-dd): </label><input pattern=".{10,}" type="text" name="date" required><br>
  <label>Time (02:00pm): </label><input pattern=".{7,}" type="text" name="time" required><br>
  <label>Location: </label><input type="text" name="location" required><br>
</div>
</fieldset>

<fieldset>
<legend>Details</legend>
<div>  
  <label>Speaker: </label><input type="text" name="speaker" required><br>
  <label>Seminar Title: </label><input type="text" name="subject" required><br>
  <label>Academic Department: </label><input type="text" name="dept" required><br>
</div>
</fieldset>

<fieldset>
<legend>Description</legend> 
<div> 
  <label>Contact: </abel><input type="text" name="email" value="<?php echo $netid ?>@u.rochester.edu" required><br>
  <label>Other Details: </label><input type="text" name="details" required>
</div>
</fieldset>
 <p>Contact the system admin to submit more information (abstract, news article, etc).</p>
<div id="submit">  
	<input type="submit" value="Submit">
</div>
</form>
</div>

</body>
</html>

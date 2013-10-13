<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Submit Event</title>
<link rel="stylesheet" href="styles.css"/>
<style type="text/css" media="screen">
body {
font: .75em/1.5 "Lucida Grande", "Lucida Sans Unicode", helvetica, verdana, arial, sans-serif;
margin: 0 auto;
padding: 0 10px;
width: 610px;
}
strong {
background: #ffc;
}
</style>
<h1><br>Submit an Event</h1>
</head>
<body>

<?php 
	$netid = $_POST["netid"];
?>

<h2>Add your department's event to the UofR Seminar Calendar<?php echo $netid ?>!</h2>
<p>Please fill out the form exactly as specified.</p>
<p>All fields are required!</p>

<form action="databaseentry.php" method="post">
<fieldset>
<legend>Logistics</legend>
<div>
  Date (yyyy-mm-dd):<input pattern=".{10,}" type="text" name="date" required><br>
  Time (02:00pm):<input pattern=".{7,}" type="text" name="time" required><br>
  Location:<input type="text" name="location" required><br>
</div>
</fieldset>
<fieldset>
<legend>Details</legend>
<div>  
  Speaker:<input type="text" name="speaker" required><br>
  Seminar Title:<input type="text" name="subject" required><br>
  Academic Department:<input type="text" name="dept" required><br>
</div>
</fieldset>
<fieldset>
<legend>Description</legend> 
<div> 
  Contact Person:<input type="text" name="email" value="<?php echo $netid ?>@u.rochester.edu" required><br>
  Seminar Description:  <textarea type="text" required></textarea><br>
</div>
</fieldset>
 
  <input type="submit" value="Submit">
</form>

</body>
</html>

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
<h1>Submit Event</h1>
</head>
<body>

<?php 
	$netid = $_POST["netid"];
?>

<h2> Welcome <?php echo $netid ?>!</h2>
<p>Please fill out the form exactly as specified.</p>
<p>All fields are required!</p>

<form action="databaseentry.php" method="post">
  Date (yyyy-mm-dd):<input pattern=".{10,}" type="text" name="date" required><br>
  Time (02:00pm):<input pattern=".{7,}" type="text" name="time" required><br>
  Speaker:<input type="text" name="speaker" required><br>
  Lecture Subject:<input type="text" name="subject" required><br>
  Department:<input type="text" name="dept" required><br>
  Location:<input type="text" name="location" required><br>
  Contact:<input type="text" name="email" value="<?php echo $netid ?>@u.rochester.edu" required><br>
  Other details:<input type="text" name="details" required><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>

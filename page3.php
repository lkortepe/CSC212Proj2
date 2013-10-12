<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Submit Event</title>
<link rel="stylesheet" href="styles.css"/>
<h1>Submit Event</h1>
</head>
<body>

<?php 
	$netid = $_GET["netid"];
?>

<h2> Welcome <?php echo $netid ?>!</h2>
<p>Fill out the form exactly as specified!</p>
<p>All fields are required!</p>

<form action="databaseentry.php" method="post">
  Date (yyyy-mm-dd):<input type="text" name="date"><br>
  Time (12:00pm):<input type="text" name="time"><br>
  Speaker:<input type="text" name="speaker"><br>
  Lecture Subject:<input type="text" name="subject"><br>
  Department:<input type="text" name="dept"><br>
  Location:<input type="text" name="location"><br>
  Contact:<input type="text" name="email" value="<?php echo $netid ?>@u.rochester.edu"><br>
  Other details:<input type="text" name="details"><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>

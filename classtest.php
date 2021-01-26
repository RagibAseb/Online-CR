<?php include('serverclasstest.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>ClassTest</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Class test Information</h2>
	</div>

	<form method="post" action="classtest.php">

		<div class="input-group">
			<label>Course Name</label>
			<input type="text" name="cname" value="<?php echo $cname; ?>">
		</div>
		<div class="input-group">
			<label>Topic</label>
			<input type="text" name="topic" value="<?php echo $topic; ?>">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="text" name="date" value="<?php echo $date; ?>">
		</div>


		<div class="input-group">
			<button type="submit" class="btn" name="classtest">save</button>
		</div>
	</form>
</body>

</html>
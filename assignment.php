<?php include('serverassignment.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Classroutine</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Assignment Information</h2>
	</div>

	<form method="post" action="assignment.php">

		<div class="input-group">
			<label>Course Name</label>
			<input type="text" name="cname" value="<?php echo $cname; ?>">
		</div>
		<div class="input-group">
			<label>Topic</label>
			<input type="text" name="topic" value="<?php echo $topic; ?>">
		</div>
		<div class="input-group">
			<label>Submission deadline</label>
			<input type="text" name="deadline" value="<?php echo $deadline; ?>">
		</div>


		<div class="input-group">
			<button type="submit" class="btn" name="assignment">save</button>
		</div>
	</form>
</body>

</html>
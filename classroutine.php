<?php include('serverroutine.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Classroutine</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Set Routine</h2>
	</div>

	<form method="post" action="classroutine.php">

		<div class="input-group">
			<label>Day</label>
			<input type="text" name="day" value="<?php echo $day; ?>">
		</div>
		<div class="input-group">
			<label>First Period</label>
			<input type="text" name="fperiod" value="<?php echo $fperiod; ?>">
		</div>
		<div class="input-group">
			<label>Second period</label>
			<input type="text" name="speriod" value="<?php echo $speriod; ?>">
		</div>
		<div class="input-group">
			<label>Third period</label>
			<input type="text" name="tperiod" value="<?php echo $tperiod; ?>">
		</div>


		<div class="input-group">
			<button type="submit" class="btn" name="classroutine">save</button>
		</div>
	</form>
</body>

</html>
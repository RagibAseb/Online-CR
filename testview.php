<!DOCTYPE html>
<html lang="en">

<head>

	<style type="text/css">
		h1 {
			text-align: center;
			color: #008080;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			color: #008080;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}

		th {
			background-color: #588c7e;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}
	</style>
</head>

<body>
	<br>
	<h1>Class Test</h1>
	<table>
		<tr>
			<th>Course Name </th>
			<th>Topic </th>
			<th>Date </th>
		</tr>
		<?php
	$conn = mysqli_connect("localhost","root","","cr");
	if($conn-> connect_error) {
		die("Connection Failed:". $conn-> connect_error);
	}
	 $sql = "Select * from classtest";
	 $result = $conn-> query($sql);
	 if ($result-> num_rows > 0)
	 {
		 while($row = $result-> fetch_assoc()) {
			 echo "<tr> <td>".$row["Course_name"]."</td> <td>".$row["Topic"]. "</td> <td>".$row["datee"].
			 "</td> <td>";
		 }
		 echo "</table>";
	 }
	 else {
		 echo "0 result";
	 }

	 $conn->close();

	 ?>
	</table>
</body>

</html>
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
	<h1>Assignment</h1>

<table>
    <tr>
    <th>Course name</th>
    <th>Topic </th>
    <th>Submission Deadline</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>
 
<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "ajax2.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var Course_name = data[a].Course_name;
                var Topic = data[a].Topic;
                var Submission_deadline = data[a].Submission_deadline;
 
                html += "<tr>";
                    html += "<td>" + Course_name + "</td>";
                    html += "<td>" + Topic + "</td>";
                    html += "<td>" + Submission_deadline + "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script>
	
</body>

</html>
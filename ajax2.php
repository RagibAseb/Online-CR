<?php
$conn = mysqli_connect("localhost", "root", "", "cr");
$result = mysqli_query($conn, "SELECT * FROM assignment");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();
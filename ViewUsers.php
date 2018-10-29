<?php
	$mySql=mysqli_connect("mysql.eecs.ku.edu", "k329l640", "shook3Pa", "k329l640");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$result = mysqli_query($mySql,"SELECT * FROM Users");
		echo "<table>
		<tr>
		<th>Users</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['user_id'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";
	$mySql->close();
?>

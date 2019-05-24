<?php

$sql = "SELECT * FROM usuarios";

$query = mysqli_query($link, $sql);


// echo "<table>";

// while($row = mysqli_fetch_assoc($query)) 
// {
// 	$email = $row["email"];
// 	echo "<tr>";

// 	echo "<td>";
// 	echo $row["nome"];
// 	echo "</td>";

// 	echo "<td>$email</td>";

// 	echo "</tr>";
// }

// echo "</table>";

echo "<table>";

while($row = mysqli_fetch_assoc($query)){

?>

	<tr>
		<td><?= $row["nome"] ?></td>
		<td><?= $row["email"] ?></td>
	</tr>

<?php 

}

echo "</table>";

?>

<p>Parágrafo HTML</p>
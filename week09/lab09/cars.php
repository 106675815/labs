<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP - MySQL Select (Check) Template</title>
</head>
<body>
<?php
    require_once "settings.php";
    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);
    if ($dbconn) {

        $query = "SELECT * FROM cars WHERE make LIKE '%o%'";
        $result = mysqli_query($dbconn, $query);
        if ($result) {
            echo "<br>
                <table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>YOM</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            echo '</table>';
        }
        else {
            echo "<p>There are no cars to display.</p>";
        }
        mysqli_close($dbconn);

        }
    else echo "<p>Unable to connect to the db.</p>";
?>
</body>
</html>
<?php
    require_once("settings.php");
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search for Cars</title>
</head>
<body>
    <h2>look 4 cars</h2>
    <form action="search_result.php" method="GET">
        <label>Search via car model:</label>
        <input type="text" name="model" id="model">

        <input type="submit" value="Search">
    </form>
<footer>
    <hr>
<a href="https://en.wikipedia.org/wiki/Pineapple" target="_blank"> Pineapple</a>
</footer>
</body>
</html>
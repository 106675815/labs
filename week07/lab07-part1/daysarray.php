<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using PHP Variables, arrays and operators</title>
    <meta name="description" content="PHP Basics Demo" />
    <meta name="keywords" content="PHP, operators" />
    <meta name="author" content="Duc Dat Ng"  />
</head>
<body>
<?php
    $days = array (
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    );
    echo "<p>The days of the week in English are:</p>";
    echo implode(", ", $days) . ".<br><br>";


    $daysFrench = array (
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi",
        "Dimanche"
    );
    echo "<p>The days of the week in French are:</p>";
    echo implode(", ", $daysFrench);
?>
</body>
</html>
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Form" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $food = $_POST['food'];
    $partysize = $_POST['partysize'];

    $species = '';
    if (isset($_POST['species'])) {
        if ($_POST['species'] === "M") {
            $species = "Human";
        }
        elseif ($_POST['species'] === "D") {
            $species = "Dwarf";
        }
        elseif ($_POST['species'] === "E") {
            $species = "Elf";
        }
        elseif ($_POST['species'] === "H") {
            $species = "Hobbit";
        }
    }
    $booking = '';
    if (isset($_POST['4day'])) {
        $booking = 'Four-day tour';
    }
    if (isset($_POST['10day'])) {
        if ($booking !== '') {
            $booking .= ' and ';
        }
        $booking .= 'Ten-day tour';
    }
    if (isset($_POST['accom'])) {
        if ($booking !== '') {
            $booking .= ' and ';
        }
        $booking .= 'Accommodation';
    }
    if ($booking === '') {
        $booking = 'no tours selected';
    }

    echo "<p>Welcome $firstname $lastname !</p>";
    echo "<p>You are now booked on the $booking</p>";
    echo "<p>Species: $species</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal Preference: $food</p>";
    echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>

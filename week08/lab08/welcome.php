<?php include 'header.inc'?>

<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome, " .$_SESSION['user'];
    echo "<br>";
    echo "Your password is " .$_SESSION['token'];
    } else {
        header('Location: login.html');
        }
?>


<?php include 'footer.inc'; ?>

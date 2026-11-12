
    <?php include 'header.inc';?>
    <form action="process.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" required> <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="hidden" name="token" value="password123">
        <input type="submit" value="login">
    </form>
    <?php include 'footer.inc';?>
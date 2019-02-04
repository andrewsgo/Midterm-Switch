<!DOCTYPE html>
<html>
<body>
    <?php
    $favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
    ?>
<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>
</body>
</html>
<html>
<?php
session_start();


if ($_SESSION["logou"] == 1) {
    echo "bem vindo";
    session_destroy();

} else {
	$_SESSION["erro"] = 2;
	header('Location: index.php');
}



?>
<h1> Test </h1>
</html>
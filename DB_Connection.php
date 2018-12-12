<?php
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','jhalgldr_jubayer');
$conn=mysqli_connect("localhost","root","","jhalgldr_jubayer");

try {

	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo '<p>'.$e->getMessage().'</p>';
    exit;
}

?>

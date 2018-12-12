<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$accountantId = $_POST['accountantId'];
  $email = $_POST['ptName'];

  $sql = 'INSERT INTO ACCOUNTANT SET NAME =:name,Accountant_Id =:accountantId,
    Email =:email';
    $query = $db ->prepare($sql);
    $query->execute(array('name' => $name, ':accountantId' => $accountantId, ':email' => $email));

      if ($query) {

          echo "Data Inserted Successully";

      } else {

          echo "Couldn't Insert Data";;
      }
}
?>

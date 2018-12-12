<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$customerId = $_POST['customerId'];
	$projectId = $_POST['projectId'];
  $projectLocation = $_POST['projectLocation'];
  $projectName = $_POST['projectName'];

  $sql = 'INSERT INTO CUSTOMER SET Customer_Id =:customerId,Project_id =:projectId,
    Project_Location =:projectLocation, Project_Name =:projectName';
    $query = $db ->prepare($sql);
    $query->execute(array('customerId' => $customerId, ':projectId' => $projectId, ':projectLocation' => $projectLocation, 'projectName' => $projectName));

      if ($query) {
          echo "Data Inserted Successully";

      } else {
          echo "Couldn't Insert Data";;
      }
}
?>

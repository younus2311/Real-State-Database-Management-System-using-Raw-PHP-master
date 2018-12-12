<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$projectId= $_POST['projectId'];
	$managerId = $_POST['managerId'];
  $email = $_POST['email'];
  $projectName = $_POST['projectName'];

  $sql = 'INSERT INTO PROJECT_MANAGER SET Project_id =:projectId,Manager_Id =:managerId,
    Email =:email,Project_Name =:projectName';
    $query = $db ->prepare($sql);
    $query->execute(array('projectId' => $projectId, ':managerId' => $managerId, ':email' => $email, 'projectName' => $projectName));

      if ($query) {

          echo "Data Inserted Successully";
          

      } else {

          echo "Couldn't Insert Data";;
          
      }
}
?>

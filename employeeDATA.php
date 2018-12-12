<?php
require_once 'DB_Connection.php';

if(isset($_POST['submit'])){

	$employeeId = $_POST['employeeId'];
	$employeeName = $_POST['employeeName'];
  $employeeAddress = $_POST['employeeAddress'];
  $employeeSalary = $_POST['employeeSalary'];
  $employeeEmail = $_POST['employeeEmail'];

  $sql = 'INSERT INTO EMPLOYEE SET Employee_Id =:employeeId,Employee_Name =:employeeName,
    Employee_Address =:employeeAddress,Employee_Salary =:employeeSalary,Employee_Email =:employeeEmail';
    $query = $db ->prepare($sql);
    $query->execute(array('employeeId' => $employeeId, ':employeeName' => $employeeName, ':employeeAddress' => $employeeAddress, 'employeeSalary' => $employeeSalary, 'employeeEmail' => $employeeEmail));

      if ($query) {

          echo "Data Inserted Successully";
          

      } else {

          echo "Couldn't Insert Data";;
           
      }
}
?>

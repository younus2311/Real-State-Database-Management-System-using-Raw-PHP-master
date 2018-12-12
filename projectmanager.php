<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Project Manager</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
  <li><a class="active" href="adminpage.php">Home</a></li>
  <li><a href="search.php">SEARCH</a></li>
  <li><a href="projectcreation.php">CREATE PROJECT</a></li>
  <li><a href="budget.php">BUDGET</a></li>
  <li><a href="customer.php">CUSTOMER INFO</a></li>
  <li><a href="employee.php">EMPLOYEE INFO</a></li>
  <li><a href="projectmanager.php">PROJECT MANAGER</a></li>
  <li><a href="mktofficer.php">MKT OFFICER</a></li>
  <li><a href="accountant.php">ACCOUNTANT</a></li>
  <li><a href="indexaslogin.php">QUIT</a></li>
</ul>
<div >
<p>JATI Real Estate Firm Database Management System</p>
</div>
<div >
<table width="300" border="10" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="projectmanagerDATA.php">
<td>
<table width="100%" border="0" cellpading="3" cellspacing="1">
<tr>
<td colspan="3"><strong>PROJECT MANAGER</strong></td>
</tr>
<tr>
<td width="78">Project ID</td>
<td width="6">:</td>
<td width="294"><input name="projectId" type="text" id="projectId"></td>
</tr>
<tr>
<td width="78">MANAGER ID</td>
<td width="6">:</td>
<td width="294"><input name="managerId" type="text" id="managerId"></td>

</tr>
<tr>
<td width="78">Email</td>
<td width="6">:</td>
<td width="294"><input name="email" type="text" ></td>

</tr>
<tr>
<td width="78">Project Name</td>
<td width="6">:</td>
<td width="294"><input name="projectName" type="text" ></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="SUBMIT"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>

</body>
</html>

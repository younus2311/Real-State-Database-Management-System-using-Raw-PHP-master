<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Budget</title>
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
<form name="form1" method="post" action="budgetDATA.php">
<td>
<table width="100%" border="0" cellpading="3" cellspacing="1">
<tr>
<td colspan="3"><strong>BUDGET</strong></td>
</tr>
<tr>
<td width="78">Project ID</td>
<td width="6">:</td>
<td width="294"><input name="projectId" type="text" id="projectId"></td>
</tr>
<tr>
<td width="78">Project Budget</td>
<td width="6">:</td>
<td width="294"><input name="projectBudget" type="text" id="projectBudget"></td>

</tr>
<tr>
<td width="78">Labour Cost</td>
<td width="6">:</td>
<td width="294"><input name="labourCost" type="text" id="labourCost"></td>

</tr>
<tr>
<td width="78">Total Ad Cost</td>
<td width="6">:</td>
<td width="294"><input name="totalAd" type="text" ></td>
</tr>
<tr>
<td width="78">Insurance Cost</td>
<td width="6">:</td>
<td width="294"><input name="InsuranceCost" type="text" id="InsuranceCost"></td>

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

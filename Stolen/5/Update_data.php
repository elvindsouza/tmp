<html>
<head>
	<title>Create Employee</title>
	<link rel="stylesheet" href="Stylesheet1.css" type="text/css" />
</head>
<body>
	<form action="Update_data.php" method="post">
	<table bgcolor="Pink" border="2" width="60%" align="center" valign="middle">
		<tr align="center"><td valign="bottom"><h1>Update Data Form</h1></td></tr>
	</table>
	<table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp Employee Name:</td>
			<td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
		</tr>
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp Employee Age:</td>
			<td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="3"name="age"/></td>
		</tr>
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp Select Genderr:</td>
			<td>&nbsp&nbsp&nbsp&nbsp <select name="sex">
				<option>Male</option>
				<option>Female</option>
			</select></td>
		</tr>
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp Employee Salary:</td>
			<td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="6"name="sal"/></td>
		</tr>
		<tr align="center">
			<td><input type="submit" value="Update" name="update" class="ab"></td>
			<td><input type="submit" value="Cancel" name="cancel" class="ab"></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
    require('connect.php');
    if(isset($_GET['edit_id']))
    {
	   $sql_query="SELECT * FROM employee WHERE name='".$_GET['edit_id']."'";
	   $result_set=mysqli_query($connection,$sql_query);
	   $fetched_row=mysqli_fetch_array($result_set);
    }
    if(isset($_POST['update']))
    {
	   // variables for input data
        $ename = $_POST['name'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $salary = $_POST['sal'];	
        // variables for input data
		// sql query for update data into database
        $sql_query = "UPDATE employee SET name='".$ename."',age=".$age.",sex='".$sex."',salary=".$salary." WHERE name='".$POST['edit_id']."'";
	   // sql query for update data into database
	   // sql query execution function
        if(mysqli_query($connection,$sql_query))
        {
		?>
		<script type="text/javascript">
            alert('Data Are Updated Successfully');
            window.location.href='Main.php';
		</script>
		<?php
        }
        else
        {
		?>
		<script type="text/javascript">
            alert('Error occured while updating data');
		</script>
		<?php
        }
	// sql query execution function
    }
    if(isset($_POST['cancel']))
    {
        header("Location: Main.php");
    }
?>
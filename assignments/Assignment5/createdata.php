<html>

<head>
    <title>Create Employee</title>
    <link rel="stylesheet" href="Stylesheet1.css" type="text/css" />
</head>

<body>
    <form action="insert.php" method="post">
        <table bgcolor="Pink" border="2" width="60%" align="center" valign="middle">
            <tr align="center">
                <td valign="bottom">
                    <h1>Create Data Form</h1>
                </td>
            </tr>
        </table>
        <table bgcolor="SkyBlue" border="2" width="60%" align="center" celpadding="15px">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Age:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="3" name="age" /></td>
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
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="6" name="sal" /></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Register" class="ab"></td>
                <td><input type="Reset" value="Reset" class="ab"></td>
            </tr>
        </table>
    </form>
</body>

</html>
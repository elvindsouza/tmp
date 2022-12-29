<html>

<head>
    <title>Create Employee</title>
    <link rel="stylesheet" href="Stylesheet1.css" type="text/css" />
    <link href='https://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Fira%20Code" rel='stylesheet' />
</head>

<body>
    <form action="insert.php" method="post">
        <table bgcolor="orange" border="2" width="60%" align="center" valign="middle">
            <tr align="center">
                <td valign="bot tom">
                    <h1>Create Data Form</h1>
                </td>
            </tr>
        </table>
        <table bgcolor="red" border="2" width="60%" align="center" celpadding="15px">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee ID:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="id" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Employee Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Designation:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="des" /></td>
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
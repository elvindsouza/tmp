<html>

<head>
    <title>Online Conference Registration</title>
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
                <td>&nbsp&nbsp&nbsp&nbsp Participant Name:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant Age:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="3" name="age" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant e-mail address:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="email" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant phone number:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="phone" /></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Select Category:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <select name="category">
                        <option>student</option>
                        <option>faculty members</option>
                        <option>professional</option>
                        <option>company/firm representative</option>
                    </select></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp Participant Country of Origin:</td>
                <td>&nbsp&nbsp&nbsp&nbsp <input type="text" maxlength="30" name="country" /></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Register" class="ab"></td>
                <td><input type="Reset" value="Reset" class="ab"></td>
            </tr>
        </table>
    </form>
</body>

</html>

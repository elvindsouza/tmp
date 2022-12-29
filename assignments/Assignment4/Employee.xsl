<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <link href='https://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' />
                <link href='https://fonts.googleapis.com/css?family=Fira Code' rel='stylesheet' />
                <style>
                    h1 {
                        color: White;
                    }

                    td {
                        padding: 15px;
                    }
                </style>
            </head>
            
            <body style="font-family:Fira Code" bgcolor="black">
                <center>
                    <h1>XYZ Company Employee Information</h1>
                    <table border="1">
                        <tr bgcolor="green">
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Department</th>
                            <th>Salary</th>
                            <th>Notes</th>
                        </tr>
                        <xsl:for-each select="Person/Employee">
                            <tr>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="orange">
                                    <xsl:value-of select="EmpId" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="pink">
                                    <b>
                                        <xsl:value-of select="EmpName" />
                                    </b>
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="red">
                                    <xsl:value-of select="Department" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="violet">
                                    <xsl:value-of select="Salary" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="purple">
                                    <xsl:value-of select="Notes" />
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
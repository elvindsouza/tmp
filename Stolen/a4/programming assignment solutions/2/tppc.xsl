<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <link href='https://code.cdn.mozilla.net/fonts/fira.css' rel='stylesheet' />
                <link href='https://fonts.googleapis.com/css?family=Fira%20Code' rel='stylesheet' />
                <style>
                    h1 {
                        color: blue;
                    }

                    td {
                        padding: 15px;
                    }
                </style>
            </head>
            
            <body style="font-family:Fira Code" bgcolor="orange">
                <center>
                    <h1>T&amp;C Placement</h1>
                    <table border="1">
                        <tr bgcolor="green">
                            <th>Company Name</th>
                            <th>Technology Work</th>
                            <th>Avg Salary</th>
                            <th>Year of Startup</th>
                        </tr>
                        <xsl:for-each select="Placement/Job">
                            <tr>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="purple">
                                    <xsl:value-of select="Company_name" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="pink">
                                    <xsl:value-of select="technology_work" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="red">
                                    <xsl:value-of select="avg_salary" />
                                </td>
                                <td style="text-align: center; vertical-align: middle;" bgcolor="violet">
                                    <xsl:value-of select="year_of_Startup" />
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
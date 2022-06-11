<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="../control/process.php"method="POST">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name ="FirstName" ></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name= "LastName"></td>
                    <tr>

                </tr>
                    <td>Age:</td>
                    <td><input type="text" name= "Age"></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td>
                        <input type="radio" name="post" value="JuniorProgrammer">Junior Programmer
                        <input type="radio" name="post" value="SeniorProgrammer">Senior Programmer
                        <input type="radio" name="post" value="ProjectLead">Project Lead
                    </td>
                </tr>
                <tr>
                    <td>Prefered Language</td>
                    <td>
                        <input type="checkbox" name="go" value="JAVA">JAVA
                        <input type="checkbox" name="go" value="PHP">PHP
                        <input type="checkbox" name="go" value="C++">C++
                    </td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="E-mail" name= "Email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>Please choose a file</td>
                    <td><input type="file" placeholder="choose a file" name="name"></td>
                </tr>
                <tr>
                    <td>
                        <input type="Submit" name = "submit">
                        <input type="Reset" name = "reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
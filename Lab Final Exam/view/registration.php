<html>

<head>
    <title>Registration</title>
</head>

<body>
    <table border = '1' width= 100%>
          <tr>
            <td align = "center">
                <a href="login.php">login</a>
                | <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <center>
                    <form action="" method="POST" enctype="">
                        <legend>REGISTRATION</legend>
                        <hr>
                        Name : <input type="text" id="name" name="name" value=""/><br>
                        Username : <input type="text" id="username" name="username" value=""/><br>
                        Contact no: <input type="text" id="contact" name="number" value=""/><br>
                        Password: <input type="password" id="password" name="password" value=""/><br> 
                        Confirm Password: <input type="password" id="confirmPassword" name="confirmPassword" value=""/><br>
                            
                        <div>
                            <input  type="button" value="Sign Up" name="submit" onclick="validate()"/>
                            <p id="error"></p>
                        </div>
                    </form>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan = "2" align = "center">
                <h6>Copyright @ 2017</h6>
            </td>
        </tr>
    </table>
    <script src="../asset/js/register.js"></script>
</body>

</html>
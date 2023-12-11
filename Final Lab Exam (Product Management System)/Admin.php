<?php
    include_once('../controller/sessioncheck.php');
    include_once('../model/employeeModel.php');

    $employee = getAllemployee();
?>


<html lang="en">

<head>
    <title> ADMIN </title>
    <script src="../asset/js/script.js"></script>
</head>

<body>
    <table border='1' width=100%>
        <tr>
            <a href="../controller/logout.php">Logout</a>
        </tr>
        <tr>
            <td width=85%>
                <form method="post" action="" enctype="">
                    <fieldset align="center">
                        <legend> Add Guest </legend>
                        <input type="text" name="name" value="" placeholder="Enter Name" />
                        <input type="text" name="cname" value="" placeholder="Enter company Name" />
                        <input type="tel" name="number" value="" placeholder="Enter Mobile Number" />
                        <br>
                        <input type="text" name="username" value="" placeholder="Enter Username" />
                        <input type="password" name="password" value="" placeholder="Enter Password" />
                        <input type="password" name="confirmPassword" value="" placeholder="Enter Confirm Password" />
                        
                        <br>
                        <hr>
                        <input type="submit" name="submit" value="Insert" />
                        <input type="submit" name="update" value="Update" />
                    </fieldset>
                </form>


                <input type="text" id="username" name="username" value="" placeholder="Enter Username" />
                <input type="button" name="search" value="Search" onclick="ajax()" />

                <table border=1 width="100%">
                    <tr>
                        <td width="50%">
                            <p id="info">
                                
                            </p>
                        </td>
                        <td>
                            <table border=1 width = "100%">
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile Number</th>
                                    <th>Username</th>
                                </tr>
                                <?php  for($i=0; $i<count($employee); $i++){ ?>
                                <tr>
                                    <td><?=$employee[$i]['StaffName']?></td>
                                    <td><?=$employee[$i]['StaffNumber']?></td>
                                    <td><?=$employee[$i]['StaffUserName']?></td>
                                    <td>
                                        <a href='../controller/delete.php?username=<?=$employee[$i]['StaffUserName']?>'> DELETE </a> 
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </td>
                    </tr>
                </table> <br />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h6>Copyright &copy 2023</h6>
            </td>
        </tr>
    </table>
</body>

</html>
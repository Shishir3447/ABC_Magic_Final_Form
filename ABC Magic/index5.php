<?php
include 'connect.php';

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $ss = "INSERT INTO `user_info` VALUES ('$name', '$number', '$email', '$password');";
    if (mysqli_query($con, $ss)) {
        echo "<script> alert('new recode insert')</script>";
    } else {
        echo "error:" . mysqli_error($con);
    }
    mysqli_close($con);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="height: 930px; width: 1243px; border: 2px solid black; margin-left: 500px; background-color:aqua;text-align: center;">
        <center>
            <h1 style="background-color: darkgoldenrod; border-radius: 10%;">Registration</h1>
            <form method="post" style="font-size: 30px;">
                <table border="2" style="margin-top: 50px;">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="Enter your name" required autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone number
                        </td>

                        <td>
                            <input type="number" name="number" placeholder="Enter your number" required autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gmail
                        </td>

                        <td>
                            <input type="email" name="email" placeholder="Enter your gmail" required autocomplete="off">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>

                        <td>
                            <input type="password" name="password" placeholder="Enter your password" required autocomplete="off">
                        </td>
                    </tr>

                    
                </table>
                <input type="submit" name="submit" value="submit" style="width: 150px;height: 40px; margin-top: 50px;font-size: 30px;padding: 2px;background-color: red;border-radius: 10%;">



            </form>
        </center>
    </div>
</body>

</html>
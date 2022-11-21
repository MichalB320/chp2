<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['mail'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //save to database
        $user_id = random_num(15);
        $query = "insert into users (user_name,password, mail) values ('$user_name','$password', '$email')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="Login/styl.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 300px) and (max-width: 500px)" href="loginStyl.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="Login/styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<style type="text/css">

    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        /*padding: 10px;*/
        /*width: 100px;*/
        /*color: white;*/
        /*background-color: lightblue;*/
        /*border: none;*/

        width: 100%;
        background: none;
        border: 2px solid #42cf2c;
        color: white;
        padding: 5px;
        font-size: 16px;
        cursor: pointer;
        margin: 12px 0;
    }

    #box{

        /*background-color: grey;*/
        /*margin: auto;*/
        /*width: 300px;*/
        /*padding: 20px;*/

        width: 200px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

</style>

<div id="box">

    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>




        <span>Please enter an email address:</span>
        <input type="email" id="mail" name="mail" required minlength="8" />
        <span class="error" aria-live="polite"></span>
        <input id="button" type="submit" value="Signup"><br><br>


        <a href="login.php">Prihlasit sa</a><br><br>
    </form>

</div>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
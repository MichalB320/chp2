<?php

if (isset($_POST['user_name'])) {
    $userName = $user_data['user_name'];

    $query = "DELETE FROM users WHERE user_name = '$userName'";

    $meno = $_POST['user_name'];
    $query = "UPDATE users SET user_name = $meno WHERE user_name = '$userName'";

    mysqli_query($con, $query);

    header("Location: MyProfile/MyProfile.php");
    die;
}

?>


<div id="box">

    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

        <input id="text" type="text" name="user_name" placeholder="nove meno"><br><br>

        <input id="button" type="submit" value="potvrd"><br><br>

    </form>
</div>

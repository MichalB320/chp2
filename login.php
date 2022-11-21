<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
//						header("Location: index.php");
                        header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>

<!--    <div class="background">-->
<!--        <div class="login-box">-->
<!--            <h1>Log in</h1>-->
<!--            <div class="textBox">-->
<!--                <i class="bi bi-person-fill"></i>-->
<!---->
<!--                <label>-->
<!--                    <input type="text" placeholder="Username" name="username" value="">-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <div class="textBox">-->
<!--                <i class="bi bi-lock-fill"></i>-->
<!---->
<!--                <label>-->
<!--                    <input type="password" placeholder="Password" name="password" value="">-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <!--        <a href="../home/home.html">-->-->
<!--            <!--            <input class="btn" type="button" name="button" value="Sign in" formtarget="../home/home.html">-->-->
<!--            <!--        </a>-->-->
<!--            <a href="../home/home.html" class="btn">Prihlásiť sa</a>-->
<!--        </div>-->
<!--    </div>-->
</body>
</html>
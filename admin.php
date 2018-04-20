<!DOCTYPE html>
<?php
ob_start();
session_start();
 ?>
 <?php if(isset($_SESSION['user_id'])) header("location: admin_home.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <style>
            body{
                background-image: url("images/tile.jpg");

            }
            .container {
                width: 600px;
                margin: 0 auto;
                background: white;
                border-radius: 20px;
                padding: 10px;
                min-height: 100%;
                min-height: 400px;
                border: 2px solid green;
            }

            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=password], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }


            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }
            h1 {
                font-family: 'Lobster', cursive;
            }
            html, body{
                font-family: 'Indie Flower', cursive;
            }
            a {
                text-decoration:none; color: black; margin-left: 460px;
            }
            a:hover {
                color: skyblue;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <center><h1>Admin Login</h1></center><br>
            <form action="" method="post">
                User Name
                <input type="text" name="user_name" value="" placeholder="user name" required> <br>
                Password
                <input type="password" name="user_pass" value="" placeholder="password" required> <br>
                <input type="submit" name="submit_button" value="Log In">
            </form>

            <?php
            if(isset($_POST['submit_button'])) {
                require "connection.php";
                $query = "select * from admin where user_id='".$_POST['user_name']."' and user_pass='".$_POST['user_pass']."'";
                $result = mysql_query($query);
                if($row=mysql_fetch_assoc($result)) {
                    $_SESSION['user_id'] = $row['user_id'];
                    header("location: admin_home.php");
                } else {
                    echo '<p id="warning" >&#10008; Login information is not correct.</p>';
                }
            }

             ?>
             <a href="home.php">Go Back To Home</a>
        </div>

    </body>
</html>

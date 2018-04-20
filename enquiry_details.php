<!DOCTYPE html>
<?php ob_start(); session_start(); ?>
<?php if(!isset($_SESSION['user_id'])) header("location: admin.php"); ?> <!-- For kick -->
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
        .container {
            background: white;
            margin: 0 auto;
            width: 800px;
            padding: 20px;
            border: 2px solid green;
            border-radius: 20px;
        }
        body {
            background-image: url("images/tile.jpg");
        }
        h1 {
            font-family: 'Lobster', cursive;
        }
        h6 {
            font-family: 'Lobster', cursive;
            font-size: 14px;
        }
        a {
            text-decoration: none;
            font-size: 20px;

        }
        a:hover {
            text-decoration: none;
            font-size: 21px;
        }
        .notBold {
            font-family: sans-serif;
            font-style: normal;
            font-weight: normal;
        }

        input[type=submit]{

               border: none;
               border-radius: 10px;
               background-color: lightgreen;
               color: white;
               padding: 15px;
               cursor: pointer;
               margin: 10px;
               margin-left: 0px;
           }

           input[type=submit]:hover{

               border: none;
               border-radius: 10px;
               background-color: green;
               color: white;
               text-decoration-color: black;
               padding: 15px;
               cursor: pointer;
           }


               /* Pulse effect */
               @-webkit-keyframes pulse {
                25% {
                 -webkit-transform: scale(1.2);
                 transform: scale(1.2);
                 }
                 75% {
                 -webkit-transform: scale(0.8);
                 transform: scale(0.8);
                 }
               }
               @keyframes pulse {
                 25% {
                -webkit-transform: scale(1.2);
                -ms-transform: scale(1.2);
                transform: scale(1.2);
                }
               75% {
               -webkit-transform: scale(0.8);
               -ms-transform: scale(0.8);
               transform: scale(0.8);
               }
             }
           .pulse {
             display: inline-block;
             -webkit-transform: translateZ(0);
             -ms-transform: translateZ(0);
             transform: translateZ(0);
             box-shadow: 0 0 1px rgba(0, 0, 0, 0);
           }
           .pulse:hover {
             -webkit-animation-name: pulse;
             animation-name: pulse;
             -webkit-animation-duration: 1s;
             animation-duration: 1s;
             -webkit-animation-timing-function: linear;
             animation-timing-function: linear;
             -webkit-animation-iteration-count: infinite;
             animation-iteration-count: infinite;
           }
        </style>
    </head>

    <body>
        <div class ="container">
        <h1>Enquiry Details</h1>
        <a href="admin_home.php">Go Back</a> <br>
        <?php
        require 'connection.php';
        $enquiry_id = $_GET['id'];
        $query = "select * from enquiry where id=".$enquiry_id;
        $result = mysql_query($query);
        $row;
        if ($row = mysql_fetch_assoc($result)) {

        }else {
            header("location: admin_home.php");
        }
         ?>

         <h6>Enquiry Id:
         <span class="notBold"><?php echo $row['id']; ?></span>
         <br></h6>

         <h6>Name:
         <span class="notBold"><?php echo $row['name'] ?></span>
         </h6>


         <h6>Mobile no.:
         <span class="notBold"><?php echo $row['mobile'] ?></span>
         </h6>


         <h6>Email address:
         <span class="notBold"><?php echo $row['email']; ?></span>
         </h6>

         <h6>Message:
         <span class="notBold"><?php echo $row['message']; ?></span>
         </h6>

         <?php echo '<form action="enquiry_details.php?id='.$enquiry_id.'" method="post">'; ?>
             <input class="pulse" type="submit" name="delete_button" value="Delete Enquiry">
         </form>

         <?php
         if(isset($_POST['delete_button'])) {
             $query = "delete from enquiry where id=".$enquiry_id;
             mysql_query($query);
             header("location: admin_home.php");
         }
          ?>
     </div>
    </body>
</html>

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
        <h1>Booking Details</h1>
        <a href="admin_home.php">Go Back</a> <br>
        <?php
        require 'connection.php';
        $booking_id = $_GET['id'];
        $query = "select * from booking where id=".$booking_id;
        $result = mysql_query($query);
        $row;
        if ($row = mysql_fetch_assoc($result)) {

        }else {
            header("location: admin_home.php");
        }
         ?>

         <h6>Booking Id:
         <span class="notBold"><?php echo $row['id']; ?></span>
         <br></h6>

         <h6>First Name:
         <span class="notBold"><?php echo $row['name_first'] ?></span>
         </h6>


         <h6>Last Name:
         <span class="notBold"><?php echo $row['name_last'] ?></span>
         </h6>


         <h6>Check In Date:
         <span class="notBold"><?php echo $row['check_in_date']; ?></span>
         </h6>


         <h6>Check Out Date:
         <span class="notBold"><?php echo $row['check_out_date']; ?></span>
         </h6>


         <h6>Number Of Room:
         <span class="notBold"><?php echo $row['no_room']; ?></span>
         </h6>


         <h6>Room Type:
         <span class="notBold"><?php echo $row['room_type']; ?></span>
         </h6>


         <h6>Number Of Person:
         <span class="notBold"><?php echo $row['no_person']; ?></span>
         </h6>

         <h6>Number Of Children:
         <span class="notBold"><?php echo $row['no_children']; ?></span>
         </h6>

         <h6>Contact Number:
         <span class="notBold"><?php echo $row['contact_no']; ?></span>
         </h6>

         <h6>Email:
         <span class="notBold"><?php echo $row['email']; ?></span>
         </h6>


         <h6>Address:
         <span class="notBold"><?php echo $row['address']; ?></span>
         </h6>


         <?php
         if($row['read_status']==0 && isset($_POST['read_button'])) {
             $query = "update booking set read_status=1 where id=".$booking_id;
             mysql_query($query);
             header("location: booking_details.php?id=".$booking_id);
         }
         if(isset($_POST['delete_button'])) {
             $query = "delete from booking where id=".$booking_id;
             mysql_query($query);
             header("location: admin_home.php");
         }
          ?>

         <?php echo '<form action="booking_details.php?id='.$booking_id.'" method="post">'; ?>
             <?php
             if($row['read_status']==0) echo '<input class="pulse" type="submit" name="read_button" value="Mark as Read">';
             ?>
             <br>
             <input class="pulse" type="submit" name="delete_button" value="Delete Booking">
         </form>
     </div>
    </body>
</html>

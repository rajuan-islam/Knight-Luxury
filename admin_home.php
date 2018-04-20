<!DOCTYPE html>
<?php ob_start(); session_start(); ?>
<?php if(!isset($_SESSION['user_id'])) header("location: admin.php"); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Fonts -->
    		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
    		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

        <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
            border: 1px solid black;
            }

            th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid white;
            }

            tr:nth-child(even){
                background-color: #f2f2f2;
                border: 1px solid black;
            }

            th {
            background-color: #938048;
            color: white;
            border: 1px solid white;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border: 2px solid green;
            border-radius: 20px;
        }
        body {
            background-image: url("images/tile.jpg");

        }
        input[type=submit]{
               width: 84px;
               border: none;
               border-radius: 10px;
               background-color: lightgreen;
               color: white;
               padding: 15px;
               cursor: pointer;
           }

           input[type=submit]:hover{
               width: 84px;
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
           h1 {
               font-family: 'Lobster', cursive;
           }
           h3{
               font-family: 'Indie Flower', cursive;
           }

        </style>

    </head>
    <body>
        <div class ="container">
        <center><h1>Admin Pannel</h1></center>
        <center><h3>Admin: <?php echo $_SESSION['user_id']; ?> </h3></center>
        <center><form action="" method="post">
            <input class="pulse" type="submit" name="log_out_button" value="Log Out">
        </form></center>
        <?php
        if (isset($_POST['log_out_button'])) {
            if (isset($_SESSION['user_id'])) {
                unset($_SESSION['user_id']);
            }
            header("location: admin.php");
        }
         ?>
         <br>

         <h2>New Bookings</h2><br>
         <table>
               <tr>
                 <th>Booking No.</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Contact No.</th>
                 <th>Check in date</th>
                 <th>Check out date</th>
                 <th>No. of room</th>
                 <th>Room Type</th>
                 <th></th>
               </tr>

               <?php
               require 'connection.php';
               $query = "select * from booking where read_status=0";
               $result = mysql_query($query);
               while ($row=mysql_fetch_assoc($result)) {
                   echo "<tr>";
                   echo '<td>'.$row['id'].'</td>';
                   echo '<td>'.$row['name_first'].'</td>';
                   echo '<td>'.$row['name_last'].'</td>';
                   echo '<td>'.$row['contact_no'].'</td>';
                   echo '<td>'.$row['check_in_date'].'</td>';
                   echo '<td>'.$row['check_out_date'].'</td>';
                   echo '<td>'.$row['no_room'].'</td>';
                   echo '<td>'.$row['room_type'].'</td>';
                   echo '<td><a href="booking_details.php?id='.$row['id'].'">Show Details</a></td>';
                   echo "</tr>";
               }
                ?>

         </table> <br>

         <h2>Enquiries</h2><br>
         <table>
               <tr>
                 <th>Name</th>
                 <th>Mobile</th>
                 <th>Email</th>
                 <th></th>
               </tr>

               <?php
               require 'connection.php';
               $query = "select * from enquiry";
               $result = mysql_query($query);
               while ($row=mysql_fetch_assoc($result)) {
                   echo "<tr>";
                   echo '<td>'.$row['name'].'</td>';
                   echo '<td>'.$row['mobile'].'</td>';
                   echo '<td>'.$row['email'].'</td>';
                   echo '<td><a href="enquiry_details.php?id='.$row['id'].'">Enquiry Details</a></td>';
                   echo "</tr>";
               }
                ?>

         </table> <br>

         <h2>Old Bookings</h2><br>
         <table>
               <tr>
                 <th>Booking No.</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Contact No.</th>
                 <th>Check in date</th>
                 <th>Check out date</th>
                 <th>No. of room</th>
                 <th>Room Type</th>
                 <th></th>
               </tr>

               <?php
               require 'connection.php';
               $query = "select * from booking where read_status=1 order by id desc";
               $result = mysql_query($query);
               while ($row=mysql_fetch_assoc($result)) {
                   echo "<tr>";
                   echo '<td>'.$row['id'].'</td>';
                   echo '<td>'.$row['name_first'].'</td>';
                   echo '<td>'.$row['name_last'].'</td>';
                   echo '<td>'.$row['contact_no'].'</td>';
                   echo '<td>'.$row['check_in_date'].'</td>';
                   echo '<td>'.$row['check_out_date'].'</td>';
                   echo '<td>'.$row['no_room'].'</td>';
                   echo '<td>'.$row['room_type'].'</td>';
                   echo '<td><a href="booking_details.php?id='.$row['id'].'">Show Details</a></td>';
                   echo "</tr>";
               }
                ?>

         </table> <br>
     </div>
    </body>
</html>

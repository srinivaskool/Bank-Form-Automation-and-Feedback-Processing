<head>
  <title>Printable Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
  body {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  }
  </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "adminboys12345";
$password = "root@123";
$dbname = "imarcat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>	  

<?php
$acc_no = $_POST["account_number"]; 
$amount = $_POST["amount"]; 
$check_acc_no = $_POST["check_acc_no"]; 

$randomid = mt_rand(100000,999999); 

$num_date = date("l jS \of F Y h:i:s A");
$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));
$date_time = $date->format('d/m/y')." ". $date->format('H:i a');
?>

<?php
if ($acc_no === $check_acc_no) 
{

    echo '<script language="javascript">';
    echo 'alert("Your Loan Application is Succesffuly Submitted")';
    echo '</script>';

               $sql = "SELECT * FROM bom WHERE account_number='$acc_no'";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                $customer_email = $row["email_id"];
                $int_rate = $row["interest_rate"];
                $contact = $row["contact"];
        
        $to=$customer_email;
            $subject="Your Application For Loan is Succesfully Submitted";
            $body="
                   <html>
                       <body>
                         <center> The Details for Loan Applocation Given Are:</center>
                           <table>
                           
                            <tr>Transaction Id
                                   <td>$randomid</td>
                               </tr>
                           
                           <tr>Date Of Application
                                   <td>$date_time</td>
                               </tr>
                               <tr>Account Number
                                   <td>$acc_no</td>
                               </tr>
                                <tr>Loan Amount
                               <td>$amount</td>
                               </tr>
                           </table><br><br>
                           <h5>For any discrepancies Conatact Srinivas (+91 8367770505) Model Colony Barnch</h5>
                       </body>
                   </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 
            
            
            
            $to= "srinivasthegreat1@gmail.com";
            $subject="Someone Applied for Loan";
            $body="
                   <html>
                       <body>
                         <center> The Details for Loan Applocation Given Are:</center>
                           <table>
                           
                            <tr>Transaction Id
                                   <td>$randomid</td>
                            </tr>
                           <tr>Date Of Application
                                   <td>$date_time</td>
                               </tr>
                               <tr>Account Number
                                   <td>$acc_no</td>
                               </tr>
                               <tr>Contact
                                   <td>$contact</td>
                               </tr>
                                <tr>Loan Amount
                               <td>$amount</td>
                               </tr>
                           </table><br><br>
                       </body>
                   </html>
                  ";          
             $headers = "MIME-Version: 1.0" . "\r\n";
             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$body,$headers); 
            
            ?>
                 <div style="margin-top:5%;" class="container">
                 <div style="padding:30px;" class="card bg-light text-dark">
                 <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6">
                            <b>Transaction id :-</b> &nbsp;<?php echo $randomid; ?><br>
                            Dear <b>
                            <?php echo $row["name"]; ?></b>,<br>
                            Your Loan Application is Succesfully Submitted<br>
                            The bank will inform You shortly about the Acceptance of the loan.
                         </div>
                         <div class="col-sm-6">
                            <center><img style="width:70px;" src="checked.svg"></center>
                         </div>  
                     </div>
                     <br><br>
                     <center><a href="bom.php"><button style="width:20%;" class="btn btn-primary">Exit</button>
                     
                 </div>
                 </div>
                 </div>
                 
            
<?php

    }
} else {
    echo "Your Account Number and Contact number are not matched";
}

$conn->close();
     
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Your account Number Didnt match")';
    echo '</script>'; 
    
    ?>
                 <div style="margin-top:5%;" class="container">
                 <div style="padding:30px;" class="card bg-light text-dark">
                 <div class="card-body">
                     Your Loan Application is <b>NOT SUBMITTED </b>
                     Please go back and Fill the form Correctly.
                 </div>
                 </div>
                 </div>
                 
<?php
}
?>

 
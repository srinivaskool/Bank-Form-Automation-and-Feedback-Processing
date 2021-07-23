
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
$contact = $_POST["contact"]; 
$acc_no_array = str_split((string)$acc_no);


$num_date = date("dm"."20"."y");
$date_array = str_split($num_date);
?>


               <?php
               $sql = "SELECT * FROM bom WHERE account_number='$acc_no' AND  contact='$contact';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
               ?>
               
               
                 <div style="margin-top:5%;" class="container">
                 <div style="padding:30px;" class="card bg-light text-dark">
                 <div class="card-body">
                     Dear <b><?php echo $row["name"]; ?></b>,<br>
                     Your Deposit Balance is <b><?php echo $row["deposit_balance"]; ?></b><br><br>
                     Your Maximum amount of Loan Available for You is <b><?php echo 0.9*$row["deposit_balance"]; ?></b><br>
                     Your Interest Rate of Loan Given is <b><?php echo 1+$row["interest_rate"]; ?>%</b><br><br>
                     <b>To get the loan Fill the form below :- </b> <br>
                     
            <form action="loan_form.php" method="post">
            
			<div class="form-group"> 
                <label for="account_number" class="control-label">Reconfirm Your Account Number</label>
                <input type="number" class="form-control" id="account_number" name="account_number" value="" placeholder="Please enter your Account Number">
	            <span class="help-block"></span>
            </div>

			
			<div class="form-group"> 
                <label for="amount" class="control-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" value="" placeholder="Please enter amount" min="1" max="<?php echo 0.9*$row["deposit_balance"]; ?>">
	            <span class="help-block"></span>
            </div>
            
            <div style="display:none;" class="form-group"> 
                <label for="check_acc_no" class="control-label">Check_acc_no</label>
                <input type="number" class="form-control" id="check_acc_no" name="check_acc_no" value="<?php echo $acc_no;?>">
	            <span class="help-block"></span>
            </div>
        
			<center><button class="btn btn-success" type="submit">Apply Loan</button></center>
            </form>
                     
                     <b>Terms & Conditions :-</b> <br> 
                     Loan can be given a maximum amount of 90% of your balance and an loan's interest rate 1% more than the present interest rate.<br>
                 </div>
                 </div>
                 </div>
               
               
               
               
               
               
<?php
    }
} else {
    echo "Your Account Number and Contact number are not matched";
}

$conn->close();
?>

</body>

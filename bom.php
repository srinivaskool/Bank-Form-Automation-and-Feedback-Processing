<?php
  $branch = $_POST['branch'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body {
  background-image: url("bg123.png");
  background-repeat: no-repeat;
  background-size: cover;
  }

.contain {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 30px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.contain input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.check_mark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .check_mark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.contain input:checked ~ .check_mark {
  background-color: #2196F3;
}

/* Create the check_mark/indicator (hidden when not checked) */
.check_mark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the check_mark when checked */
.contain input:checked ~ .check_mark:after {
  display: block;
}

/* Style the check_mark/indicator */
.contain .check_mark:after {
  left: 10px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
  </style>
</head>
<body>

<div style="margin-top:20px" class="container">
  <br><br>
  <button style="margin-left:40%;width:20%;padding:10px;font-size:18px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Withdrawal Form
  </button>
  <br><br><br>
  
  <button style="margin-left:40%;width:20%;padding:10px;font-size:18px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    Deposit Form
  </button>
  <br><br><br>
  
  <button style="margin-left:40%;width:20%;padding:10px;font-size:18px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
    LAD Form
  </button>
  <br><br><br>
  
  <button style="margin-left:40%;width:20%;padding:10px;font-size:18px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
    Suggestions
  </button>
  
</div>


  <br><br><br>

  <div class="container">
  <h4><center>Please Give Us Your Feedback</center></h4>
  <br><br>
  <form action="bom.php" method="post">
  <div class="row">
    <div class="col-sm-4">
      <center><button style="padding:20px;" type="submit"  name = "great" class="btn btn-success"><img style="width:30px;height:30px;" src="happy.svg"> &nbsp;&nbsp;Great Experience</button></center>
    </div>
    <div class="col-sm-4">
      <center><button style="padding:20px;" type="submit"  name = "satisfied" class="btn btn-warning"><img style="width:30px;height:30px;" src="satisfied.svg"> &nbsp;&nbsp;Satisfied  Experience</button></center>
    </div>
     <div class="col-sm-4">
      <center><button style="padding:20px;" type="submit"  name = "bad" class="btn btn-danger"><img style="width:30px;height:30px;" src="sad.svg"> &nbsp;&nbsp;Bad Experience </button></center>
    </div>
  </div>
  <?php include 'experience.php';?>
  </form>
  <br><br>
  <h5><center><a href="#" data-toggle="modal" data-target="#myModal5">You Can also write your feedback here.</a></center></h5>
</div>





 <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Please Fill Your Details Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="modal-body">
	   <form action="withdrawal_print_form.php" method="post">
		<div style="display:none;" class="form-group"> 
	      <input value="<?php echo $branch;?>" name="branch">
            </div>
			
            <div class="form-group"> 
                <label for="name" class="control-label">Name of holder</label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Please enter your Name">
	            <span class="help-block"></span>
            </div> 
		    
			<div class="form-group"> 
                <label for="account_number" class="control-label">Account Number</label>
                <input type="number" class="form-control" id="account_number" name="account_number" value="" placeholder="Please enter your Account Number">
	            <span class="help-block"></span>
            </div>
			 
			<div class="form-group"> 
                <label for="contact" class="control-label">Contact Number</label>
                <input type="number" class="form-control" id="contact" name="contact" value="" placeholder="Please enter your Contact Number">
	            <span class="help-block"></span>
            </div> 
			
			<div class="form-group"> 
                <label for="pan" class="control-label">Pan Card Number</label>
                <input type="text" class="form-control" id="pan" name="pan" value="" placeholder="Please enter your Pan Card Number">
	            <span class="help-block"></span>
            </div>
			
			<div class="form-group"> 
                <label for="amount" class="control-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="" placeholder="Please enter amount">
	            <span class="help-block"></span>
            </div>
			<center><button class="btn btn-success" type="submit">Submit</button></center>
        </form>
			
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
    

  
  
  
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Please Fill Your Details Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="modal-body">
	   <form action="deposit_print_form.php" method="post">
		<div style="display:none;" class="form-group"> 
	      <input value="<?php echo $branch;?>" name="branch">
            </div>
            
			<div class="form-group"> 
                <label for="account_number" class="control-label">Account Number</label>
                <input type="number" class="form-control" id="account_number" name="account_number" value="" placeholder="Please enter your Account Number">
	            <span class="help-block"></span>
            </div>
			 
			<div class="form-group"> 
                <label for="contact" class="control-label">Contact Number</label>
                <input type="number" class="form-control" id="contact" name="contact" value="" placeholder="Please enter your Contact Number">
	            <span class="help-block"></span>
            </div> 
			
			<div class="form-group"> 
                <label for="amount" class="control-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="" placeholder="Please enter amount">
	            <span class="help-block"></span>
            </div>
            
			<center><button class="btn btn-success" type="submit">Submit</button></center>
        </form>
			
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Please Fill Your Details Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="modal-body">
	   <form action="apply_loan.php" method="post">
	       
			<div class="form-group"> 
                <label for="account_number" class="control-label">Account Number</label>
                <input type="number" class="form-control" id="account_number" name="account_number" value="" placeholder="Please enter your Account Number">
	            <span class="help-block"></span>
            </div>
			 
			<div class="form-group"> 
                <label for="contact" class="control-label">Contact Number</label>
                <input type="number" class="form-control" id="contact" name="contact" value="" placeholder="Please enter your Contact Number">
	            <span class="help-block"></span>
            </div> 
            
			<center><button class="btn btn-success" type="submit">Submit</button></center>
        </form>
			
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Please Select the Complaint Below :</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="modal-body">
          <center><h5>Select The problem You faced in the branch </h5></center><br>
	      <form action="#" method="post">
<label class="contain"><h5>Bad customer service</h5>
  <input type="checkbox" name="check_list[]" value="Bad customer service">
  <span class="check_mark"></span>
</label>
<label class="contain"><h5>Failing to honor their promises</h5>
  <input type="checkbox" name="check_list[]" value="Failing to honor their promises">
  <span class="check_mark"></span>
</label>
<label class="contain"><h5>No drinking water</h5>
  <input type="checkbox" name="check_list[]" value="No drinking water">
  <span class="check_mark"></span>
</label>
<label class="contain"><h5>No washroom</h5>
  <input type="checkbox" name="check_list[]" value="No washroom">
  <span class="check_mark"></span>
</label>
<label class="contain"><h5>Bank staff not available</h5>
  <input type="checkbox" name="check_list[]" value="Bank staff not available">
  <span class="check_mark"></span>
</label>
        <br>
<center><input style="width:20%;" class="btn btn-success" type="submit" name="submit" Value="Submit"/></center>
<!----- Including PHP Script ----->
<?php include 'checkbox_value.php';?>

</form>
        </div>

        <div class="modal-footer">
          <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
    <div class="modal fade" id="myModal5">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Give Us Your Feedaback below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      <div class="modal-body">
          <p>Effective feedback, both positive and negative, is very helpful. Feedback is valuable information that will be used to make important decisions. </p>
	     <form action="feedback.php" method="post">
	  <div class="form-group">
      <label for="feedback">Feedabck and Suggestions :</label>
      <textarea class="form-control" rows="6" id="feedback" name="feedback"></textarea>
      </div>
      		<div style="display:none;" class="form-group"> 
	      <input value="<?php echo $branch;?>" name="branch">
            </div>
      <center><button class="btn btn-success" type="submit" name="submit">Submit</button></center>
         </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  

</body>
</html>

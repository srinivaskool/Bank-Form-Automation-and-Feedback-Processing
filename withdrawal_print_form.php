
<head>
  <title>Printable Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary" style="margin-top:30px;"> 
 
 <?php
$acc_no = $_POST["account_number"]; 
$acc_no_array = str_split((string)$acc_no);


$num_date = date("dm"."20"."y");
$date_array = str_split($num_date);
?>

<div class="container">
    <div class="card col-sm-12 bg-white">
    <div class="container-fluid">
	    <div class="row">
      <div class="col-sm-4 bg-white">  
      <img style="width:80%;margin-left:10%;" src="bom.jpg">
      </div>
        <div class="col-sm-5 bg-white">  
     <img style="width:100%;height:65px;" src="asd.png">
     </div>
     <div class="col-sm-3 bg-white"> 
     <img style="width:100%;height:80px;" src="sda.png">
    </div>
    </div>
      </div>
    
    <br><div class="container-fluid">
	    <div class="row">
      <div class="col-sm-8 bg-white"> 
      
      
           <div class="container-fluid">
	    <div class="row">
	        
      <div style="margin-left:-15px;" class="col-sm-2 bg-white">
      <b>Date</b> 
      </div>
      <div class="col-sm-6 bg-white">
        <div class="container-fluid">
         <div class="row">
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[0];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[1];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[2];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[3];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[4];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[5];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[6];?></div>
      <div style="outline:2px solid" class="col-md bg-white"><?php echo $date_array[7];?></div>
     </div>  
    </div>
   </div>
   </div>
   </div><br>
      
      
      
      
    <div><b>Branch :- </b> <?php echo $_POST["branch"]; ?></div>
	<div><b>Holder Name :- </b><?php echo $_POST["name"]; ?></div>
	<div>
	    <b>Account Number :- </b>
	    <div class="container-fluid">
	    <div class="row">
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[0]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[1]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[2]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[3]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[4]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[5]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[6]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[7]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[8]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[9]; ?>
      </div>
      <div style="outline:2px solid" class="col-sm-1 bg-white">
      <?php echo $acc_no_array[10]; ?>
      </div>
     </div>
    </div>
	
	
	</div><br>
	<div ><b>Contact Number :-  </b><?php echo $_POST["contact"]; ?></div>
	<div ><b>Pan Number :-  </b><?php echo $_POST["pan"]; ?></div>
	<div ><b>Amount in Number :-  </b><?php echo $_POST["amount"]; ?></div>
	<div><b>Amount in Words :-  </b><?php echo text_converter($_POST["amount"]); ?></div>
      <br><br><img style="width:60%;margin-left:20%;" src="sad.png">
       </div>
       <div class="col-sm-4 bg-white">
       
       <img style="width:90%;" src ="Capture1.png">
       <br><br>
       <img style="width:90%;" src ="cap.jpeg">
       </div>
        </div>
  </div>
    </div>
  </div>  

<?php
function text_converter($number) {
    $no = round($number);
    $decimal = round($number - ($no = floor($number)), 2) * 100;    
    $digits_length = strlen($no);    
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }  
    }
    
    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
    return ($Rupees ?  $Rupees .' Rupees ' : '') . $paise . " Paisa Only";
}
 
?>



</body>


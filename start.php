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
   </style>
</head>
<body>
     <br><br>
    <center><img style="width:300px;" src="bom.jpg"></center>
     <br><br>
    <div class="container">
  <div class="row">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-6 ">
      <form action="bom.php" method="post">
		<div  class="form-group"> 
         <label> Select Branch  </label>
         <div class="select">
	      <select class="form-control" style="width: 100%;height: 100%;cursor: pointer;" name="branch">
           <option value="Select">Select</option>  
           <option value="Model Colony">Model Colony</option>  
           <option value="Shivaji Nagar">Shivaji Nagar</option>  
           <option value="Mundhwa">Mundhwa</option>  
           <option value="Kharadi">Kharadi</option>  
	      </select>
            </div>		
            </div>
            
            	<center><button class="btn btn-success" type="submit">Submit</button></center>
          </form>
    </div>
     <div class="col-sm-3">
      
    </div>
  </div>
</div>
    <br>
    <br><br>
    <center><img src="4th-Digital-India-Web-File.jpg"></center>	   
    
    
    
</body>
</html>
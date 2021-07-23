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

$great = 0;$satisfied = 0;$bad = 0;

if(isset($_POST['great']))
{
  $great = 1;
}
    
if(isset($_POST['bad']))
{
  $bad = 1;  
}

if(isset($_POST['satisfied']))
{
  $satisfied = 1;
}

if(isset($_POST['great']) || isset($_POST['bad']) || isset($_POST['satisfied']))
{
$qry="INSERT INTO experience(great,satisfied,bad) VALUES ($great,$satisfied,$bad);";

if(mysqli_query($conn,$qry)===true)
	{
    ?>
    <br>
    <center><h5 id="thanks_statement">Thanks for your Feedback. <?php echo $branch; ?></h5></center>
    <script>
    setTimeout(function(){
  if ($('#thanks_statement').length > 0) {
    $('#thanks_statement').remove();
  }
}, 2000)
</script>
    <?php
    
	}
	else
	{
		echo mysqli_error($conn);
	}
}	
?>
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
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";

$topic_1 = 0;$topic_2 = 0;$topic_3 = 0;$topic_4 = 0;$topic_5 = 0;

foreach($_POST['check_list'] as $selected) {

    if(strcmp($selected, "Bad customer service")==0)
    {
        $topic_1 = 1;
    }
    if(strcmp($selected, "Failing to honor their promises")==0)
    {
        $topic_2 = 1;
    }
    if(strcmp($selected, "No drinking water")==0)
    {
        $topic_3 = 1;
    }
    if(strcmp($selected, "No washroom")==0)
    {
        $topic_4 = 1;
    }
    if(strcmp($selected, "Bank staff not available")==0)
    {
        $topic_5 = 1;
    }
    
}

$qry="INSERT INTO problems(problem_1,problem_2,problem_3,problem_4,problem_5) VALUES ($topic_1,$topic_2,$topic_3,$topic_4,$topic_5);";

if(mysqli_query($conn,$qry)===true)
	{
		echo ("<script>
		window.alert('Succesfully Submitted');
		window.location.href='bom.php';
    </script>
        </script>");
	}
	else
	{
		echo mysqli_error($conn);
	}
	
}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
}
?>
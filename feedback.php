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
if(isset($_POST['submit']))
{
    $feed = $_POST["feedback"];
    $branch = $_POST["branch"];
    $qry="INSERT INTO feedback(feedbacks,branch) VALUES ('$feed','$branch');";

if(mysqli_query($conn,$qry)===true)
	{
		echo ("<script>
		window.alert('Succesfully Submitted Your Feedback');
		window.location.href='bom.php';
        </script>");
	}
	else
	{
		echo mysqli_error($conn);
		echo "<script>
		window.alert('Unsuccessful.');</script>";
    }
}
else{
echo "<script>
		window.alert('Unsuccessful.Please Try again');</script>";
}

?>
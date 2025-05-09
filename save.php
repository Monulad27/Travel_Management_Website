<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$con=mysqli_connect('localhost','root','root','travel');


$firstname=$_POST['fname'];
$password=$_POST['password'];
$email=$_POST['email'];
$city=$_POST['city'];
$phone=$_POST['phone'];

$check = "SELECT * FROM customer WHERE fname='$firstname'";
$res = mysqli_query($con, $check);

if(mysqli_num_rows($res) > 0){
    echo "Customer already exists!";
} else {
    $sql = "INSERT INTO customer ('id','fname', 'password', 'email', 'city', 'phone') 
            VALUES ('$firstname','$password','$email','$city','$phone')";
    $result = mysqli_query($con, $sql);
if($result)
{
	if($firstname=="admin" && $password == "ad123"){
		header("location:admin.php");

	}
	else{
		header("location:mainPage.html");
	}
}
else{
	$que = "SELECT `fname` FROM `customer` WHERE fname='$firstname'";
	$result = mysqli_query($con,$que);
	if($result){
		?>
		<script type="text/javascript">
			alert("username already taken")
		</script>
		<?php
	}
}
}
?>

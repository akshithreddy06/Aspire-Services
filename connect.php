<?
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$compname=$_POST['compname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

$conn=new mysqli('localhost','root','','rohitsharma');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into register1(firstname,middlename,lastname,compname,phone,address,email,pass,repass)
	values(?,?,?,?,?,?,?,?,?)");
	$stmt->blind_param("ssssissss",$firstname,$middlename,$lastname,$compname,$phone,$address,$email,$pass,$repass);
	$stmt->excecute();
	echo "registration successfull...";
	$stmt->close();
	$conn->close();
?>
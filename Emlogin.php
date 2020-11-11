
<?php

include_once('header.php');
include_once('Emloginh.php');
include_once('link.php');
 
$conn = new mysqli('localhost', 'root', '', 'hiring');

session_start(); 
if(isset($e_SESSION['email']))
header("Location: EmAccount.php"); 
$eshow_form = false;
$elogin_result = $eemailx = $epasswordx = '' ;

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($e_POST["submit"])){
extract($e_POST);
if(empty($eemail)){
$eemailx = "Please fill out email";
$eshow_form = true;
} else {
$eemail = ($eemail);
if(!filter_var($eemail, FILTER_VALIDATE_EMAIL)){
$eemailx = "Invalid email format";
$eshow_form = true;
}
}

if(empty($epassword)){
$epasswordx = "Please fill out the password";
$eshow_form = true;
}

 
if( (!empty($eemail)) && (!empty($epassword)) && (!$eshow_form)){
$epassword = sha1($epassword);
 
$esearch = " SELECT * FROM employers WHERE email = '$eemail' AND password = '$epassword' ";
$eresult = $conn->query($esearch);


 
if($eresult->num_rows == 1){

 
$erow = $eresult->fetch_assoc();

$e_SESSION['email'] = $erow['email'];
$e_SESSION['firstName'] = $erow['firstName'];
$e_SESSION['middleName'] = $erow['middleName'];
$e_SESSION['lastName'] = $erow['lastName'];
$e_SESSION['area'] = $erow['area'];

/*$_SESSION['major'] = $row['major'];
$_SESSION['degree'] = $row['degree'];
$_SESSION['gpa'] = $row['gpa'];
$_SESSION['city'] = $row['city'];
$_SESSION['state'] = $row['state'];*/






header("Location: EmAccount.php");
$conn->close();
} else { echo "There's some problem logging you in. We are sorry for the inconvience"; }

} else{
$elogin_result = "Invalid credentials" ;
$eshow_form = true;
}

}  

}  
else {
$eshow_form = true;
}

if($eshow_form){
?>

<div class="error">
	
<?php echo $elogin_result; ?>
</div>

<?php
}

 
?>

</div>  
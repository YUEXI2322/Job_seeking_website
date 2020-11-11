

<?php

include_once('header.php');
include_once('Emsignuph.php');
include_once('link.php');

 
$conn = new mysqli('localhost', 'root', '', 'hiring');

session_start();

if(isset($e_SESSION['email']))
header("Location: emlogin.php");


$eshow_form = false;


$epasswordx = $econfirm_Passwordx = $ecomNamex = $efirstNamex = $emiddleNamex = $elastNamex = $eemailx = $eareax = $etypex = $ecomphoneNox = $ephoneNox = $eadr1x = $eadr2x = $ecityx = $estatex = $ezipx = $ecomemailx = '' ;


if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($e_POST['submit'])){


extract($e_POST);

if(empty($eemail)){
$eemailx = "Please fill out email";
$eshow_form = true;
}
else {
$eemail = ($eemail);
if(!filter_var($eemail, FILTER_VALIDATE_EMAIL)){
$eemailx = "Invalid email format";
$eshow_form = true;
}
}

if(empty($epassword)){
$epasswordx = "Please fill out this field" ;
$eshow_form = true;
}

if(empty($econfirm_Password)){
$econfirm_Passwordx = "Please fill out this field" ;
$eshow_form = true;
}


if(empty($efirstName)){
$efirstNamex = "Please enter valid name";
$eshow_form = true;
}

if(empty($emiddleName)){
$emiddleNamex = "Please enter valid name";
$eshow_form = true;
}

if(empty($lastName)){
$lastNamex = "Please enter valid name";
$show_form = true;
}

if(empty($earea)){
$eareax = "Please enter your area";
$eshow_form = true;
}

if(empty($etype)){
$etypex = "Please enter your type";
$eshow_form = true;
}

if(empty($ecomphoneNo)){
$ecomphoneNox = "Please enter your Phone Number";
$eshow_form = true;
}

if(empty($ephoneNo)){
$ephoneNox = "Please enter valid Phone Number";
$eshow_form = true;
}

if(empty($eadr1)){
$eadr1x = "Please enter your Addres";
$eshow_form = true;
}
if(empty($eadr2)){
$eadr2x = "Please enter valid Addres";
$eshow_form = true;
}

if(empty($ecity)){
$ecityx = "Please enter valid City";
$eshow_form = true;
}

if(empty($estate)){
$estatex = "Please enter your State";
$eshow_form = true;
}

if(empty($ezip)){
$ezipx = "Please enter your Zip Code";
$eshow_form = true;
}
if(empty($ecomemail)){
$ecomemailx = "Please enter Your company email";
$eshow_form = true;
}

if(empty($ecomName)){
$ecomName = "Please enter the company name";
$eshow_form = true;
}





if( $epassword !== $econfirm_Password){
$epasswordx = "Passwords do not match" ;
$econfirm_Passwordx = "Passwords do not match";
$eshow_form = true;
}

if((!empty($eemail)) && (!empty($epassword))   && (!empty($econfirm_Password)) && ($epassword === $econfirm_Password) && 
	(!empty($efirstName)) && (!empty($emiddleName)) && (!empty($elastName)) && (!empty($earea)) && (!empty($etype)) && 
	(!empty($ecomphoneNox)) && (!empty($ephoneNo)) && (!empty($eadr1)) && (!empty($eadr2)) && (!empty($ecity)) && (!empty($estate)) && (!empty($ezip)) && (!empty($ecomemail)) && (!empty($ecomName)) && (!$eshow_form) ){


$equery = "SELECT * FROM employers WHERE email = '$email' ";
$eresult = $conn->query($equery);

if($eresult->num_rows == 0){
$epassword = sha1($epassword);

$einsert = "INSERT INTO employers (comName, comemail, comphoneNo, area, type, adr1, adr2, city, state, zip, password, firstName, middleName, lastName, email,phoneNo) VALUES ('$ecomName' '$ecomemail', '$ecomphoneNo', '$earea','$etype', '$eadr1', '$eadr2', '$ecity', '$estate', '$ezip', '$epassword','$efirstName', '$emiddleName', '$elastName', '$eemail', '$ephoneNo')" ;

if($conn->query($einsert) === TRUE){
echo "Signed up successfully. You can now <a href='direct.php'> login </a> to your account";
}

}
else { $eemailx = "Entered email/username is already registered";
$eshow_form = true;
}

} else {
$eshow_form = true;
}

}  
}

 
else
$eshow_form = true ;

 
if( $eshow_form ){
?>


<?php
}

?>
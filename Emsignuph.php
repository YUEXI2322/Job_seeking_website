<!DOCTYPE html>
<html>
<head>
	<title> signup for Employer</title>
</head>
<body>

 <?php
include_once('Emsignup.php');
include_once('link.php');
 ?>


<div id="content-wrapper">

<fieldset>
<legend> Employer Sign Up </legend>
 
<form method="post" action="Emsignup.php">
<table class="signup_table">

	<dir>
	<p><h1>Company and Company's representative information </h1></p>
</dir>  
<dir class="sidebar">
<tr>
<td> <label for="comName"> Company Name: </label> </td>
<td>
<input type="text" name="comName" id="comName" value=" <?php if(!empty($ecomName)) echo $ecomName; ?>" required="required" />
<span id="comNamex" class="error"> <?= $ecomNamex ?> </span>
</td>
</tr>
<br>
</dir>


<tr>
<td> <label for="comemail"> Company Email: </label> </td>
<td>
<input type="comemail" name="comemail" id="comemail" value="<?php if(!empty($ecomemail)) echo $ecomemail; ?>" required="required" />
<span id="comemailx" class="error"> <?= $ecomemailx ?> </span>
</td>
</tr>

<tr>
<td> <label for="comphoneNo"> Company Phone Number: </label> </td>
<td>
<input type="comphoneNo" name="comphoneNo" id="comphoneNo" value="<?php if(!empty($ecomphoneNo)) echo $ecomphoneNo; ?>" required="required" />
<span id="comphoneNox" class="error"> <?= $ecomphoneNox ?> </span>
</td>
</tr>



<tr>
<td> <label for="area"> clssification of work area: </label> </td>
<td>

<textarea   rows="10" cols="60"  type="text" name="area" id="area" value="<?php if(!empty($earea)) echo $earea; ?>" required="required" placeholder=" What the field work that the company can provid? and what majors are looking for?" ></textarea>
<span id="areax" class="error"> <?= $eareax ?> </span>
</td>
</tr>


<tr>
<td> <label for="type"> type of business: </label> </td>
<td>
<input type="text" name="type" id="type" value="<?php if(!empty($etype)) echo $etype; ?>" required="required" />
<span id="typex" class="error"> <?= $etypex ?> </span>
</td>
</tr>


<tr>
<td> <label for="adr1"> Addres 1: </label> </td>
<td>
<input type="adr1" id="adr1" name="adr1" required="required" />
<span id="adr1x" class="error"> <?= $eadr1x ?> </span>
</td>
</tr>

<tr>
<td> <label for="adr2"> Addres 2: </label> </td>
<td>
<input type="adr2" id="adr2" name="adr2" required="required" />
<span id="adr2x" class="error"> <?= $eadr2x ?> </span>
</td>
</tr>


<tr>
<td> <label for="city"> City : </label> </td>
<td>
<input type="text" name="city" id="city" value="<?php if(!empty($ecity)) echo $ecity; ?>" required="required" />
<span id="cityx" class="error"> <?= $ecityx ?> </span>
</td>
</tr>

<tr>
<td> <label for="state"> State: </label> </td>
<td>
<input type="text" name="state" id="state" value="<?php if(!empty($estate)) echo $estate; ?>" required="required" />
<span id="statex" class="error"> <?= $estatex ?> </span>
</td>
</tr>
<tr>
<td> <label for="zip"> Zip Code: </label> </td>
<td>
<input type="text" name="zip" id="zip" value="<?php if(!empty($ezip)) echo $ezip; ?>" required="required" />
<span id="zipx" class="error"> <?= $ezipx ?> </span>
</td>
</tr>


<tr>
<td> <label for="password"> Password: </label> </td>
<td>
<input type="password" id="password" name="password" required="required" />
<span id="passwordx" class="error"> <?= $epasswordx ?> </span>
</td>
</tr>

<tr>
<td> <label for="confirm_password"> Confirm Password: </label> </td>
<td>
<input type="password" id="confirm_password" name="confirm_Password" required="required" />
<span id="confirm_Passwordx" class="error"> <?= $econfirm_Passwordx ?> </span>
</td>
</tr>





<tr>
<td> <label for="firstName"> First Name: </label> </td>
<td>
<input type="text" name="firstName" id="firstName" value="<?php if(!empty($efirstName)) echo $efirstName; ?>" required="required" />
<span id="firstNamex" class="error"> <?= $efirstNamex ?> </span>
</td>
</tr>

<tr>
<td> <label for="middleName"> Middle Name: </label> </td>
<td>
<input type="text" name="middleName" id="middleName" value="<?php if(!empty($emiddleName)) echo $emiddleName; ?>" required="required" />
<span id="middleNamex" class="error"> <?= $emiddleNamex ?> </span>
</td>
</tr>
<tr>
<td> <label for="lastName"> Last Name: </label> </td>
<td>
<input type="text" name="lastName" id="lastName" value="<?php if(!empty($elastName)) echo $elastName; ?>" required="required" />
<span id="lastNamex" class="error"> <?= $elastNamex ?> </span>
</td>
</tr>


<tr>
<td> <label for="email"> Email: </label> </td>
<td>
<input type="email" name="email" id="email" value="<?php if(!empty($eemail)) echo $eemail; ?>" required="required" />
<span id="emailx" class="error"> <?= $eemailx ?> </span>
</td>
</tr>



<tr>
<td> <label for="phoneNo"> Phone Number: </label> </td>
<td>
<input type="phoneNo" name="phoneNo" id="phoneNo" value="<?php if(!empty($ephoneNo)) echo $ephoneNo; ?>" required="required" />
<span id="phoneNox" class="error"> <?= $ephoneNox ?> </span>
</td>
</tr>





</section>

	</div>
</body>
<tr>
<td> <input type="submit" name="submit" value="Sign Up" id="signup_btn" /> </td>
</tr>
</table>
</form>
</fieldset>




</body>
</html>
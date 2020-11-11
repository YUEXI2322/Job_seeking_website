<!DOCTYPE html>
<html>
<head>
	<title> Employer Account </title>




<?php 
include_once('header1.php');

include_once('link.php');


?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        
        <div class="useravatar">
          
        </div>
        <div class="card-info"> <span class="card-title">
        	<?php 
include_once('Emindex.php');

        	echo $e_SESSION['firstName']." ".$e_SESSION['lastName']; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" >
        <div class="btn-group" >
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>Name</td>
          		<td><?php 
          		include_once('Emindex.php');

          		echo $e_SESSION['firstName'] . " " . $e_SESSION['lastName']; ?></td>
          	</tr>
          	
          	<tr>
          		<td>area</td>
          		<td><?php
          		include_once('Emindex.php');
          		 echo $e_SESSION['area']; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php 
          		include_once('Emindex.php');

          		echo $e_SESSION['email']; ?></td>
          	</tr>

			<!-- <tr>
          		<td>Major</td>
          		<td><?php
          		//include_once('Emindex.php');
          		// echo $_SESSION['major']; ?></td>
          	</tr>

          	<tr>
          		<td>GPA</td>
          		<td><?php
          		//include_once('index.php');
          		// echo $_SESSION['gpa']; ?></td>
          	</tr>


          	<tr>
          		<td>Degree</td>
          		<td><?php 
          		//include_once('index.php');

          		//echo $_SESSION['degree']; ?></td>
          	</tr> --->


          	<tr>
          		<td>Addres</td>
          		<td><?php
          		include_once('index.php');
          		 echo $e_SESSION['city'] . "," . $e_SESSION['state']; ?></td>
          	</tr>
          

          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div> 




<div class="categories">


<form class="my-form">
      <div class="form-group">
        <label>INSERT JOBS: </label>
        <input type="text" name="JOBS">
      </div>
</div>
<br>

<div class="categories">


  <div class="form-group">
        <label>INSERT INTRENSHEPS: </label>
        <textarea name="INTRENSHEPS"></textarea>
      </div>
      <input class="button" type="submit" value="Submit" name="">
    </form>

		</div>
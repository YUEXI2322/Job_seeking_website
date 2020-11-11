
<body id="container">
			
		


			
	
<?php
 
session_start();

 

if(isset($e_SESSION['email']) )
{

echo " Welcome, " .					     $e_SESSION['firstName'];
echo "  " . 							 $e_SESSION['lastName'] . "<br/> ";
echo " <br/>Area:<br/> " . 		 $e_SESSION['area'] . "<br/>";
//echo " <br/>" .							 $_SESSION['major'] . "<br/>";
echo "<br/> " . 						 $e_SESSION['email'] . "<br/>";
//echo "<br/> " .							 $_SESSION['degree'] . "<br/>";
//echo "<br/>GPA :" . 					 $_SESSION['major'] . "<br/>";
echo "  " . 							 $e_SESSION['city'] ;
echo ", " . 							 $e_SESSION['state'] . "<br/>";


}

else
{

include_once('header1.php');
include_once('link.php');	
?>


<b> Thank you ! <br> we are looking forward to your next visit <br>         Goodbuy </b>
 
<?php
}
?>

	</body>
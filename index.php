  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("mydb2", $con);
  
  

 if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if(isset($_POST['submitpost'])){

  $sql="INSERT INTO hi (firstname, lastname, email, number, message)
VALUES
('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[number]','$_POST[message]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<script>alert('Thank you for Submitting the details. Click OK to Continue');</script>";

    }
	

}
mysql_close($con);	
   ?>


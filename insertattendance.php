<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','VINEETH@9','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
 //  $rollno =  $_POST["rollno"];
   //$name =  $_POST["name"];
   //$date  = $_POST['date'];
   //$attendance  = $_POST["attendance"];
 

$s = "INSERT INTO `attendance_taken`(`rollno`, `name`, `date`, `attendance`) VALUES";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
		$s .="('".$_POST['rollno'][$i]."','".$_POST['name'][$i]."','".$_POST['date'][$i]."','".$_POST['attendance'][$i]."'),";
	}
	$s = rtrim($s,",");

  //$sql = "INSERT INTO `attendance_taken`(`rollno`, `name`, `date`, `attendance`) VALUES ('$rollno','$name','$date','$attendance')";

  if (mysqli_query($con,$s))
  {
  ?>
   <script>
      //window.location = "admin.php";
        if(!alert('attendance added successfully.')){window.location = "attendancepanel.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "attendancepanel.php";
          if(!alert('Can not add attendance.Some error occured')){window.location = "attendancepanel.php";}
   
     </script>
   <?php
   }
   

 
  
  }

?>
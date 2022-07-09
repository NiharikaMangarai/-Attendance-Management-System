<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','VINEETH@9','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $name =  $_POST["name"];
   $gender =  $_POST["gender"];
   $email  = $_POST['email'];
   $DOB  = $_POST["dateofbirth"];
   $Contact_No  = $_POST["contact"];
   $course  = $_POST["department"];
   $branch  = $_POST["branch"];



  $sql = "INSERT INTO `student_details`(`name`, `gender`, `email`, `DOB`, `contact_no`, `course`,`branch`) VALUES ('$name','$gender','$email','$DOB','$Contact_No','$course','$branch')";

  
   

  //$sql = "INSERT INTO `student` (`name`, `email`, `DOB`, `contact_no`) VALUES ('$name','$email','$DOB','$Contact_No')";


   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('student added successfully.')){window.location = "admin.php?view_student=view_student";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_student=view_student";
          if(!alert("Can not add student. Some error occured")){window.location = "admin.php?view_student=view_student";}
   
     </script>
   <?php
   }	 

  
  }

?>
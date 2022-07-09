<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include("header.php");?>



<?php

//make connection
$con = mysqli_connect('localhost','root','VINEETH@9','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
 ?>	

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Attendance can be seen below.</h1>
		  <br>
		    <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Dashboard</button></a>

		   <br>
<h4 class="text-center">student can find there Roll No here and can use Roll No to view there attendance</h4>

		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Abscent</th>
      </tr>
    </thead>
    <tbody>
		
		<?php 
	      date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $Today = date("d-m-Y", strtotime($date));
          ?>
 <?php 
//select database

$sql="SELECT * FROM `attendance_taken` WHERE date='$Today' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   
      <tr>
        <td><?php echo $post['rollno']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    

     </tbody>
    </table>
	</div>
   

<?php include("footer.php"); ?>

 <?php } ?>
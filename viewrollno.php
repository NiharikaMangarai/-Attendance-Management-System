<?php include("header.php"); ?> 


    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Student Details</h1>
		   <br>
<h4 class="text-center">Student can find there Roll No here and can use Roll No to view there attendance</h4>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Course</th>
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','VINEETH@9','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database


$sql="SELECT * FROM `student_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['course']; ?></td>
	   </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php include("footer.php"); ?>   

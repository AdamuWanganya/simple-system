<<?php 
 
 $host="localhost";
 $user="root";
 $password="";
 $db="registration";
 $conn=mysqli_connect($host,$user,$password,$db);

 if(!$conn)
 {
  echo "not connected";
  die();

 }



 //if (isset($_POST['submit']))
 // {
    $registrationNumber=$_POST['regno'];
    $studentName=$_POST['student'];

    $nationality=$_POST['nationality'];
    echo $nationality;
 
    $gender=$_POST['gender'];
    $dob=$_POST['DOB'];
    $address=$_POST['address'];


     //echo $registrationNumber."<br/>".$studentName."<br/>".$nationality."<br/>".$gender."<br/>".$dob."<br/>".$address;
   # code...
// }
  $sql="insert into signup(regno,student,Nationality,gender,DOB,address) values('$registrationNumber','$studentName','$nationality','$gender','$dob','$address')";
  if(mysqli_query($conn,$sql)){
    echo "<br><br>";
  echo"inserted";

 }
 else {
  echo"failed";
 }
 
 ?>

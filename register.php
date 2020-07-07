<?php
  $username= $_POST['username'];
  $regd= $_POST['regd'];
  $branch= $_POST['branch'];
  $email= $_POST['email'];
 $conn new mysqli('localhost','root','','test');
 if($conn->coonect_error){
   die('Connection failed :'.$conn->connect_error);
}
else {
$stmt=$conn->prepare("insert into registration(username,regd,branch,email)
       values(?,?,?,?)");
      $stmt->bind_param("ssssi",$ussrname,$regd,$branch,$email);
      $stmt->execute();
      echo"Registrartration succesfully,,,";
      &stmt->close();
      &conn->close();s
}
  
?>
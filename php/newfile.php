<?php
 session_start();
 require('config.php');
 if(isset($_POST['username']) and isset($_POST['password'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     
     $query="SELECT * FROM admin WHERE username='$username' and password='$password'";
     
     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
     
     $count=mysqli_num_rows($result);
     
     if($count==1)
     {
         $_SESSION['username']=$username;
         echo"You have logged in successfully";
         
         header("location: home.html");
     }
     else{
         $fmsg="Invalid username or password";
         echo"<br>Invalid username or password";
         
     }
    /* $row=mysql_fetch_array($query);
     
     if($row['username']==$username && $row['password']==$password){
         echo "Login successful ";
     }
     else{
         echo "Login failed";
     }*/
 }




 
?>
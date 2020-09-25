<?php
    
    
    

    

    $conn=mysqli_connect("localhost", "root", "9552","login");
    
    $username = $_POST['user'];

    $password= sha1($_POST['pass']);


    $result = mysqli_query($conn,"select * from users where username =' $username'");
    $d = mysqli_num_rows($result);     
       if(($d)==0){
       $query = mysqli_query($conn,"insert into users (username,password) values ('$username','$password')"); // Insert query
        if($query){
        echo "You have Successfully login";
        }else{
        echo " not sucessful";
        }
        }else{
        echo "This useris already registered ";
        }
    
        mysqli_close ($conn);
    
?>
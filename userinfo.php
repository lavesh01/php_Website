<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "userdata";

    //Creating a database connection
    $conn = new mysqli($server,$username,$password,$database);

    if($conn->connect_error){
        die("Connection to this database failed due to" . $conn->connect_error);
    }else{
        echo "Connection Successfull!!";
    }


    //Collect post variable
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`)
         VALUES ('$user','$email','$mobile','$comment')";

    if($conn->query($sql) == TRUE){
        echo "SuccessfullY inserted";
        echo $sql;
        header('location:index.php');
    }

    
    $conn->close();
    
?>
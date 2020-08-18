<?php

    require './Documents/variables.php';
    
    $con = mysqli_connect(server_name, username, password ,db_name );
    
    $query = 'insert into clients (name , number) values("'.$_POST['name'].'","'.$_POST['number'].'");';
    
    if(mysqli_connect_errno()){
        echo 'Couldnt connect to database ' . mysqli_connect_error();
    }
    else {
        
        if(mysqli_query($con , $query)){
            echo "New record created successfully";
        }
        else {
            echo "Error: " . mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
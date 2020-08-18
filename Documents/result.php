<!DOCTYPE html>
<html>
    <head>
        <title>Add Information</title>
    </head>
    <body bgcolor="#003333">
        <p align="center">
            <?php
                require '../Documents/variables.php';
                //echo 'require is passed<br/>';
                $con = mysqli_connect(server_name, username, password ,db_name );
                //echo 'con is passed<br/>';
                if(mysqli_connect_errno()){
                    echo 'Couldnt connect to database ' . mysqli_connect_error();
                }
                else {
                    $query = 'insert into clients (name , number) values("'.$_POST['name'].'","'.$_POST['number'].'");';
                    //echo 'query is passed<br/>';
                    if(mysqli_query($con , $query)){
                        echo "New record created successfully";
                    }
                    else {
                        echo "Error: " . mysqli_error($con);
                    }
                    mysqli_close($con);
                }
            ?>
        </p>
    </body>
</html>
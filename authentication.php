<?php    
    session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $id = $_POST['id'];
    $role = $_POST['role'];

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from login_details where Id = '$id' and username='$username' and password='$password' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION["uname"] = $username;
        /*echo $count;
        echo $username;
        echo $password;
        echo $id;
        echo $row['role'];*/
        if($count == 1){  
            if($row['role'] == "admin"){
                header("Location: adminDashboard.php");}
            elseif($row['role'] == "bus incharge"){
                $_SESSION["bus_name"] = $row['bus_name'];
                header("Location:Bus_incharge.php");
            }
            elseif($row['role'] == "student"){
                header("Location:Student.php");
            }
            else{
                header("Location:index.php");
            }
            
        }  
        else{  
            header("Location:index.php");  
        }
?>
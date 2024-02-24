<?php
session_start();
require 'connection.php';

if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM login_details WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: adminDashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: adminDashboard.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $bus_name = mysqli_real_escape_string($con, $_POST['bus_name']);

    $query = "UPDATE login_details SET username='$name', email='$email', phone_no='$phone', password ='$password', role='$role', bus_name='$bus_name' WHERE Id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Person Updated Successfully";
        header("Location: adminDashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Person Not Updated";
        header("Location: adminDashboard.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{
    $id=mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $bus_name = mysqli_real_escape_string($con, $_POST['bus_name']);

    $query = "INSERT INTO login_details (Id,username,password,email,phone_no,role,bus_name) VALUES ('$id','$name','$password','$email','$phone','$role','$bus_name')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Person Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Person Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
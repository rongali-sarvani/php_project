<?php
session_start();
require 'connection.php';

if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM student_login_details WHERE id='$student_id' ";
    $query1 = "DELETE FROM login_details WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    $query_run1 = mysqli_query($con, $query1);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: Bus_incharge.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: Bus_incharge.php");
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
    $stop = mysqli_real_escape_string($con, $_POST['stop']);
    $total_amount = mysqli_real_escape_string($con, $_POST['total_amount']);
    $paid_amount = mysqli_real_escape_string($con, $_POST['paid_amount']);
    $to_be_paid = mysqli_real_escape_string($con, $_POST['to_be_paid']);

    $query = "UPDATE student_login_details SET username='$name', email='$email', phone_no='$phone', password ='$password', role='$role', bus_name='$bus_name', stop='$stop', total_amount='$total_amount', paid_amount='$paid_amount', to_be_paid='$to_be_paid' WHERE Id='$student_id' ";
    $query1 = "UPDATE login_details SET username='$name', email='$email', phone_no='$phone', password ='$password', role='$role', bus_name='$bus_name' WHERE Id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    $query_run1 = mysqli_query($con, $query1);

    if($query_run)
    {
        $_SESSION['message'] = "Person Updated Successfully";
        header("Location: Bus_incharge.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Person Not Updated";
        header("Location: Bus_incharge.php");
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
    $stop = mysqli_real_escape_string($con, $_POST['stop']);
    $total_amount = mysqli_real_escape_string($con, $_POST['total_amount']);
    $paid_amount = mysqli_real_escape_string($con, $_POST['paid_amount']);
    $to_be_paid = mysqli_real_escape_string($con, $_POST['to_be_paid']);

    $query = "INSERT INTO student_login_details (Id,username,password,email,phone_no,role,bus_name,stop,total_amount,paid_amount,to_be_paid) VALUES ('$id','$name','$password','$email','$phone','$role','$bus_name','$stop','$total_amount','$paid_amount','$to_be_paid')";
    $query1 = "INSERT INTO login_details (Id,username,password,email,phone_no,role,bus_name) VALUES ('$id','$name','$password','$email','$phone','$role','$bus_name')";

    $query_run = mysqli_query($con, $query);
    $query_run = mysqli_query($con, $query1);
    if($query_run)
    {
        $_SESSION['message'] = "Person Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Person Not Created";
        header("Location: create.php");
        exit(0);
    }
}

?>
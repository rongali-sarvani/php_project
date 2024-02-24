<?php
session_start();
require 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit 
                            <a href="Bus_incharge.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM student_login_details WHERE Id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="studcode.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $student['Id']; ?>">

                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="<?=$student['username'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$student['phone_no'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?=$student['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Role</label>
                                        <input type="text" name="role" value="<?=$student['role'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Bus_name</label>
                                        <input type="text" name="bus_name" value="<?=$student['bus_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Stop</label>
                                        <input type="text" name="stop" value="<?=$student['stop'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Total Amount</label>
                                        <input type="text" name="total_amount" value="<?=$student['total_amount'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount Paid</label>
                                        <input type="text" name="paid_amount" value="<?=$student['paid_amount'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount to be paid</label>
                                        <input type="text" name="to_be_paid" value="<?=$student['to_be_paid'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
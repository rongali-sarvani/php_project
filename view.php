<?php
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

    <title>View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Person View Details 
                            <a href="Bus_incharge.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM student_login_details WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>

                                    <div class="mb-3">
                                        <label>ID</label>
                                        <p class="form-control">
                                            <?=$student['Id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <p class="form-control">
                                            <?=$student['username'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?=$student['phone_no'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <p class="form-control">
                                            <?=$student['password'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Role</label>
                                        <p class="form-control">
                                            <?=$student['role'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Bus_name</label>
                                        <p class="form-control">
                                            <?=$student['bus_name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Stop</label>
                                        <p class="form-control">
                                            <?=$student['stop'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Total_Amount</label>
                                        <p class="form-control">
                                            <?=$student['total_amount'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Amount Paid</label>
                                        <p class="form-control">
                                            <?=$student['paid_amount'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>To be paid Amount</label>
                                        <p class="form-control">
                                            <?=$student['to_be_paid'];?>
                                        </p>
                                    </div>

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
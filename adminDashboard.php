<?php
include("connection.php");
session_start();
if(!isset($_SESSION["uname"]))
{
    header("Location:index.php");  
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        body{
            margin: 0px;
        }
        header {
            background-color: rgb(69, 33, 8);
            color: white;
            text-align: center;
            padding: 10px;
        }
        
        </style>
    </head>
    <body>
        <header>
        <h2><b>ADMIN</b><br>Welcome to <?php  echo $_SESSION["uname"];  ?></h2>
        <form action="adminDashboard.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
        </header>
        <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Person Details
                            <a href="student-create.php" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Bus_name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM login_details where role='bus incharge' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['Id']; ?></td>
                                                <td><?= $student['username']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                                <td><?= $student['phone_no']; ?></td>
                                                <td><?= $student['password']; ?></td>
                                                <td><?= $student['role']; ?></td>
                                                <td><?= $student['bus_name']; ?></td>
                                                <td>
                                                    <a href="student-view.php?id=<?= $student['Id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student-edit.php?id=<?= $student['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$student['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
?>
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
        <h2><b>STUDENT</b><br>Welcome to <?php  echo $_SESSION["uname"];  ?></h2>
        <form action="Student.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
        </header>
        <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM student_login_details";
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
                                                <td>
                                                    <a href="sview.php?id=<?= $student['Id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <form action="uploading_file.php"
		method="post"
		enctype="multipart/form-data"> 
		Directory   <input type="text"
						name="dirname"
						id="dirname"> 
		<br> <br>
		Select image to upload: 
		<input type="file"
			name="fileToUpload"
			id="fileToUpload"> 
		<br> <br>
		<input type="submit"
			value="Upload Image"
			name="submit"> 
	</form> 
                                                </td>
                                            </tr>
                                            <?php
                                        }
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
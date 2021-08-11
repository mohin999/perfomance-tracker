<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Update Data</h4>
                    </div>
                    <div class="card-body">

                        <form action="update.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">Roll no</label>
                                <input type="text" name="roll" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="namee" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Branch</label>
                                <input type="text" name="branchh" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Passout_year</label>
                                <input type="text" name="p" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Codechef_score</label>
                                <input type="text" name="c" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Hackerrank_score</label>
                                <input type="text" name="h" class="form-control" >
                            </div>
                             <div class="form-group mb-3">
                                <label for="">Codeforce_score</label>
                                <input type="text" name="cs" class="form-control" >
                            </div>

                              <div class="form-group mb-3">
                                <label for="">Hackerearth_score</label>
                                <input type="text" name="hs" class="form-control" >
                            </div>
                              
                              <div class="form-group mb-3">
                                <label for="">Total_score</label>
                                <input type="text" name="t" class="form-control" >
                            </div>




                            <div class="form-group mb-3">
                                <button type="submit" name="update_stud_data" class="btn btn-primary">Update Details</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
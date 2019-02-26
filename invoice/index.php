<?php
session_start();
include('../include/db.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $check_username_query = "SELECT * FROM users WHERE username = '$username'";
    $check_username_run = mysqli_query($con, $check_username_query);
    if(mysqli_num_rows($check_username_run) > 0){
        $row = mysqli_fetch_array($check_username_run);
        
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_role = $row['role'];
        
        
        if($username == $db_username && $password == $db_password){
            $_SESSION['username'] = $db_username;
            $_SESSION['role'] = $db_role;
            header('Location: student_dashboard.php');
            
        }
        else{
            $error = "Wrong Username or Password";
        }
    }
    else{
        $error = "Wrong Username or Password";
    }
}
?>

<?php
    include_once('include/header.php');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reciept Generator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/respond.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
</head>

<body>





<div class="container">
    <?php
    include_once('include/sidebar1.php');
?>
    <div class="row">


            <form action="generate.php" enctype="multipart/form-data" method="post" class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Reciept Generator</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Reference Number</label>
                        <div class="col-md-6">
                            <input id="developer" name="developer" placeholder="Paymnet Reference Number" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Name</label>
                        <div class="col-md-6">
                            <input id="address" name="address" placeholder="Full name" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Email</label>
                        <div class="col-md-6">
                            <input id="phone" name="phone" placeholder="amadikwajoyn@gmail.com" class="form-control input-md" required="" type="email" value="">

                        </div>
                    </div>


                  

                    <!-- Text input-->
                    <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Amount</label>
                    <div class="col-md-6">
                        <input id="hourlyprice" name="hourlyprice" placeholder="500" class="form-control input-md" required="" type="number" value="" >

                    </div>
                    </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label" for="Description">Payment For</label>
                        <div class="col-md-6">
                            <input id="description" name="description" placeholder="T-shirt and constitution" class="form-control input-md" type="text" value="">

                        </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Level</label>
                    <div class="col-md-6">
                        <input id="hours" name="hours" placeholder="HND2m" class="form-control input-md" required="" type="text" value="" >

                    </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Session</label>
                        <div class="col-md-6">
                            <input id="tax" name="tax" placeholder="2017/2018" class="form-control input-md" required="" type="text" value="">

                        </div>
                    </div>

                   


                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-4"><input type="submit" name="submit" value="Generate Reciept" class="btn btn-primary btn-block btn-lg" tabindex="5">
                        </div>
                    </div>
                    </div>


        </div>


        </div>
</div>

<?php
    include_once('include/footer.php');
?>


<!-- javascript -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start();
include('include/db.php');
$userid = 5;
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
	<title>Reciept Status</title>
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


                <fieldset>

                  

                    <h3 class="inner-tittle two">Payment Status </h3>
                                                          <div class="graph">
                                                            <div class="tables">
                                                                <table class="table"> <thead> <tr> <th>#</th> <th>Payment Title</th> <th>Payment Amount</th> <th>Payment Status</th> </tr> </thead> 
                                                                    <tbody> 
                                                                        <?php

                                                                         $sql = "SELECT * FROM `payment` WHERE `userid` = '$userid';";
                                                                                $query=mysqli_query($con,$sql);
                                                                                 $numrow=mysqli_num_rows($query);
                                                                                  if($numrow>0){
                                                                                  $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
                                                                                  $duesid=$result['duesid'];
                                                                                  $status=$result['status'];
                                                                                   while ($result=mysqli_fetch_array($query)) {
                                                                                           $duesid=$duesid."||".$result['duesid'];
                                                                                           $status=$status."||".$result['status'];
                                                                                  
                                                                            }
                                                                                   $duesid2=explode("||", $duesid);
                                                                                    $status2=explode("||", $status);
                                                                                    $px = count($duesid2);
                                                                        }
                                                                         for ($i=0; $i < $px; $i++) {  
                                                                             $sql = "SELECT * FROM `dues` WHERE `id` = '$duesid2[$i]';";
                                                                                $query=mysqli_query($con,$sql);
                                                                                 $numrow=mysqli_num_rows($query);
                                                                                  $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
                                                                                  $amount=$result['amount'];
                                                                                  $dues=$result['title'];
                                                                         $a = $i + 1;        
                                                                            if ($status2[$i] === "Pending") {
                                                                                $class = "success";
                                                                            }else{
                                                                                $class = "success";
                                                                            }
                                                                        ?>
                                                                        <tr class="<?php echo $class; ?>"> 
                                                                            <th scope="row"><?php echo $a; ?></th> 
                                                                            <td><?php echo $dues; ?></td> 
                                                                            <td><?php echo $amount; ?></td> 
                                                                            <td><?php echo $status2[$i]; ?></td> 
                                                                        </tr> 
                                                                        
                                                                        <?php
                                                                    }

                                                                    ?>
                                                                       
                                                                        </tbody> 
                                                                    </table> 
                                                            </div>
                                                
                                                    </div>

                    

                   


                    <div class="row">
                   
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

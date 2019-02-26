 <?php 

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'pay_dues';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


ob_start();
session_start();
$newname2 = "";
require_once('db.php');

    if ($_SESSION['role'] != "Student") {
     header('Location: student_login.php');
}

   if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];
    $refno = rand(10000000, 999999999);
    $session = $_POST['session'];
    $status = "Pending";

    $check_query = "SELECT * FROM payment WHERE duesid = '$amount' and session = '$session' and address = '$address'";
      $check_run = mysqli_query($con, $check_query);
    
    if(mysqli_num_rows($check_run) > 0){
        $error = "This Payment Has Already Exist";
    }

    
    
  $sql = "INSERT INTO `payment` (`id`, `userid`, `duesid`, `refno`, `address`, `session`, `status` ) VALUES (NULL, '$id', '$amount', '$refno', '$address', '$session', '$status')";

if(mysqli_query($con,$sql)){
            $message = "Payment was Uploaded Successfully!";
            header('Location: invoice/generate.php?ref='.$refno);
    }
    else{
        $error = "Payment was not Uploaded Successfully, try again later!";
    }
if (isset($message)) {
    echo "<script>alert('".$message."');</script>";
}
elseif (isset($error)) {
    echo "<script>alert('".$error."');</script>";
}


   }


require_once('include/header.php');

?>

<head>
  <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
  <link href="css1/animated.css" rel="stylesheet">
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css1/login.css" rel="stylesheet">
</head>


 <div class="wrap">
          <!---start-content---->
          <div class="content">
            <div class="contact">
    <div class="container">
             <?php
                include_once('include/sidebar1.php');
             ?>
                <form action=""   method="POST">
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in" action=''></i> Credit Card Payment</button>
                </p>


                    
<?php                                               
$x = "";




$sql = "SELECT * FROM `dues` ";
    $query=mysqli_query($con, $sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $id=$result['id'];
      $title=$result['title'];
      $amount=$result['amount'];
       while ($result=mysqli_fetch_array($query)) {
               $id=$id."||".$result['id'];
               $title=$title."||".$result['title'];
               $amount=$amount."||".$result['amount'];
             }
                      $id2=explode("||", $id);
                      $title2=explode("||", $title);
                      $amount2=explode("||", $amount);
                      $allow = "yes";
                      $px = count($id2);
                    } 
                    ?>
             </form>
              <h3 class="text-center text-muted" style="color: green"><strong>BANK DEPOSIT</strong></h3>
              <hr>
              <p class="text-center text-muted"><strong>BANK:</strong> FIRST BANK</p>
              <p class="text-center text-muted"><strong>ACCOUNT NAME:</strong> COMPUTER SCIENCE DEPARTMENT</p>
              <p class="text-center text-muted"><strong>ACCOUNT NUMBER:</strong> 3049935067</p>
              
              <hr>
              <p>&nbsp;</p>
              
              <form action="" method="post">
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script type="text/javascript">
    element.addEventListener('amt', function() {
    var value = +this.value;
    if (value === value) this.value = value.toFixed(4);
}, false);
  </script>
 
  <p></p>
  
     <select class="form-control" name="address" style="padding: 0px" required>
        <option value="">Select Level</option>
        <option value="ND1 MORNING" >ND1 MORNING</option>
        <option value="ND1 EVENING" >ND1 EVENING</option>
        <option value="ND1 WEEKEND" >ND1 WEEKEND</option>
        <option value="ND2 MORNING" >ND2 MORNING</option>
        <option value="ND2 EVENING" >ND2 EVENING</option>
        <option value="ND2 WEEKEND" >ND2 WEEKEND</option>
        <option value="HND1 MORNING">HND1 MORNING</option>
        <option value="HND1 EVENING">HND1 EVENING</option>
        <option value="HND1 WEEKEND">HND1 WEEKEND</option>
        <option value="HND2 MORNING">HND2 MORNING</option>
        <option value="HND2 EVENING">HND2 EVENING</option>
        <option value="HND2 WEEKEND">HND2 WEEKEND</option>
      </select>
  <p></p>
  <p></p>
  
      <select class="form-control" name="amount" style="padding: 0px" required>
       
          <option value="">Select Payment</option>
           <?php
               if($allow === "yes"){
              for ($i=0; $i < $px; $i++) {          
            ?>
          <option value="<?php echo $id2[$i]; ?>"><?php echo $title2[$i]."  at  ".$amount2[$i]; ?></option>
<?php
                  }}
                  ?>
      </select>
  <p></p>
  <input type="text" name="session" id="amt" placeholder="the session for payemnt (2017/2018)" class="form-control" width="10" required >
  <p></p>
  <center><button type="SUBMIT" name="submit" class="btn btn-template-outlined"> Submit</button></center>
   <hr>
<center><p>Contact us on +234 816 553 7257 or <a target="_blank" href="mailto:inquiry@csdepartment.info">inquiry@csdepartment.info</a></p></center>
</form>
 
<script>
 var amt = document.getElementById('amt').value
 var amt2 = "00"
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_8jkhhliu64567890-=-pojhgfdsdfguuy7t6e',
      email: 'inquiry@csdepartment.info',
      amount: document.getElementById('amt').value + amt2,
      ref: ''+Math.floor((Math.random() * 100000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "COMPUTER SCIENCE DEPARTMENT",
                variable_name: "COMPUTER SCIENCE DEPARTMENT",
                value: "+08138370507"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

           </div> <!-- /container -->

</div>
  <div class="clear"> </div>
      </div>
             </div>


 <?php

require_once('include/footer.php');

?>


 <?php
session_start();
$ref = "";
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'pay_dues';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once('include/header.php');


  if (isset($_POST['submitpay'])) {
    $ref = $_POST['ref'];
 $sql = "SELECT * FROM `payment` WHERE `refno` = '$ref';";
    $query=mysqli_query($con,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $duesid=$result['duesid'];
}


    $sql = "SELECT * FROM `dues` WHERE `id` = '$duesid';";
    $query=mysqli_query($con,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $title=$result['title'];
      $amt=$result['amount'];
}
  }
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
              <h3 class="text-center text-muted"><strong>ONLINE PAYMENT</strong></h3>
              <center><img src="images/payment.png" style="width: 30%;"></center>
               <hr>

              <p class="text-center text-muted"><strong>BANK:</strong> FIRST BANK</p>
              <p class="text-center text-muted"><strong>ACCOUNT NAME:</strong> COMPUTER SCIENCE DEPARTMENT</p>
              <p class="text-center text-muted"><strong>ACCOUNT NUMBER:</strong> 3049935067</p>
              <p class="text-center text-muted"><strong>BANK:</strong> FIRST BANK</p>
              <p class="text-center text-muted"><strong>ACCOUNT NAME:</strong> COMPUTER SCIENCE DEPARTMENT</p>
              <p class="text-center text-muted"><strong>ACCOUNT NUMBER:</strong> 3049935067</p>
              <p>&nbsp;</p>
<?php
if (!isset($amt)) {

?>
<form action="" method="POST">
  <input type="text" name="ref" id="ref" class="form-control" placeholder="Enter Reference Number">
  <p>&nbsp;</p>

  <center><button type="submit" name="submitpay" class="btn btn-template-outlined"> Proceed to Payment</button></center>

</form>

<?php     
}
?>

<form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script type="text/javascript">
    element.addEventListener('amt', function() {
    var value = +this.value;
    if (value === value) this.value = value.toFixed(4);
}, false);
  </script>
  <script type="text/javascript">
    element.addEventListener('amtnew', function() {
    var value = +this.value;
    if (value === value) this.value = value.toFixed(4);
}, false);
  </script>
   
<input type="hidden" name="amt" id="amt" value="<?php echo $amt; ?>">
<input type="hidden" name="amtnew" id="amtnew" value="<?php echo $amt; ?>">

<?php
if (isset($amt)) {

 echo' <center><button type="button" onclick="payWithPaystack()" class="btn btn-template-outlined"> Pay with Credit/Debit Card (TEST)</button> <i> &nbsp;<button type="button" onclick="payWithPaystack2()" class="btn btn-template-outlined"> Pay with Credit/Debit Card (LIVE)</button></i> </center>';
     
}
?>
<hr>

<center><p>Contact us on +234 816 553 7257 or <a target="_blank" href="mailto:inquiry@csdepartment.info">inquiry@csdepartment.info</a></p></center>
 </form>
<script>
var amtnew = document.getElementById('amtnew').value
 var amtnew2 = "00"
  function payWithPaystack(){
    var handler = PaystackPop.setup({
     key: 'pk_test_8b2a48a9f9c73b0448e11860f9e7d2d18f55af3b',

      email: 'inquiry@csdepartment.com',
      amount: document.getElementById('amtnew').value + amtnew2,
      ref: '<?php echo $ref ;?>', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "COMPUTER SCIENCE DEPARTMENT",
                variable_name: "COMPUTER SCIENCE DEPARTMENT",
                value: "+2348165537257"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
       $a = "true";
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

<script>
 var amtnew = document.getElementById('amtnew').value
 var amtnew2 = "00"
  function payWithPaystack2(){
    var handler = PaystackPop.setup({
     key: 'pk_live_c7420daf64381ce575f3cba36fc80353ab429c50',

      email: 'inquiry@csdepartment.com',
      amount: document.getElementById('amtnew').value + amtnew2,
      ref: '<?php echo $ref ;?>', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "COMPUTER SCIENCE DEPARTMENT",
                variable_name: "COMPUTER SCIENCE DEPARTMENT",
                value: "+2348165537257"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          <?php
            $a = "true";

          ?>
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
     <?php
     if ($a === "true"){
            $sql = "UPDATE `payment` SET `status` = 'Paid' WHERE `payment`.`refno` = '$ref';";
    $query=mysqli_query($con,$sql);
}
          ?>
      </div>
             </div>


 <?php

require_once('include/footer.php');

?>


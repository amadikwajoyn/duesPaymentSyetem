<?php

session_start();
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'pay_dues';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$id = $_SESSION['id'];
$refno = $_POST['ref'];

$sql = "SELECT * FROM `payment` WHERE `refno` = '$refno' AND `status` = 'Paid';";
    $query=mysqli_query($con,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $id=$result['id'];
      $userid=$result['userid'];
      $level=$result['address'];
      $session=$result['session'];
      $duesid=$result['duesid'];

$sql = "SELECT * FROM `users` WHERE `id` = '$userid';";
    $query=mysqli_query($con,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $name=$result['name'];
      $email=$result['email'];
}

$sql = "SELECT * FROM `dues` WHERE `id` = '$duesid';";
    $query=mysqli_query($con,$sql);
     $numrow=mysqli_num_rows($query);
      if($numrow>0){
      $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
      $title=$result['title'];
      $amount=$result['amount'];

            $_SESSION['recieptname'] = "csdept";
$_SESSION['payment'] = $title;
}











$myDate = date('m/d/Y');





?>

<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('logo1.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        
        $this->Cell(55);

        // Title
        $this->SetTextColor(0,0,255);
        $this->Cell(110,10,'Computer Science Departmental Invoice',0,0,'C');
        // Line break
        $this->Ln(10);
        $this->Cell(220,10,'P.M.B 1036',0,0,'C');
         $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);



$pdf->Cell(75);
$pdf->SetTextColor(100,100,255);
$pdf->Cell(40,9, 'OFFICIAL PAYMENT RECIEPT', 0,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(320,9, $myDate, 0,1,'C');


$pdf->Cell(15);
$pdf->Cell(60,15,'Reference Number: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $refno, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Full Name: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $name, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Email: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $email, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Amount:  ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, 'NGN'.number_format($amount), 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Payment For: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $title, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Level: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $level, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->Cell(60,15,'Session: ', 1,0,'L');
$pdf->Cell(0.1);
$pdf->Cell(100,15, $session, 1,0,'L');
$pdf->Ln(15);


$pdf->Cell(15);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(40,18,'Signature: ', 0,1,'L');
$pdf->Image('sign.png',25,179,30);
$pdf->Cell(15);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(40,8,'...........................', 0,1,'L');
$pdf->Cell(15);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(40,10,'H.O.D: Computer Science Department', 0,1,'L');
$pdf->Output();

}else{
    header('Location: ../404.php');
}
?>







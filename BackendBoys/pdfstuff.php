
<?php
require ('mysqli_connect.php');
    require('fpdf.php');
    //require
    $id=$_GET['id'];
$query = "SELECT * from student_data WHERE id='$id'";
$r = @mysqli_query($dbc, $query);
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 16);
    $pdf->SetXY(10,10);
    $pdf->Cell(40, 10, $row['id']);
    $pdf->SetXY(10,20);
    $pdf->Cell(40,10,'Name:'.$row['first_name'].' '.$row['last_name']);
    $pdf->SetXY(10,30);
    $pdf->Cell(40, 10, 'Branch'.$row['branch']);
    $pdf->SetXY(10,40);
    $pdf->Cell(40, 10, 'Clubs:'.$row['clubs']);
    $pdf->SetXY(10,50);
    $pdf->Cell(40, 10, 'Departments'.$row['departments']);
    $pdf->SetXY(10,60);
    $pdf->Cell(40, 10, 'Objective'.$row['objective']);
    $pdf->Output();
    //we can easily add templates to the same and make changes to it also 
}
?>


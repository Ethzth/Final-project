<html>
<head>
<title>ThaiCreate.Com PHP PDF</title>
</head>
<body><style>
body {font-family:"Times New Roman",serif}
h1 {font:bold 135% Arial,sans-serif; color:#4000A0; margin-bottom:0.9em}
h2 {font:bold 95% Arial,sans-serif; color:#900000; margin-top:1.5em; margin-bottom:1em}
dl.param dt {text-decoration:underline}
dl.param dd {margin-top:1em; margin-bottom:1em}
dl.param ul {margin-top:1em; margin-bottom:1em}
tt, code, kbd {font-family:"Courier New",Courier,monospace; font-size:82%}
div.source {margin-top:1.4em; margin-bottom:1.3em}
div.source pre {display:table; border:1px solid #24246A; width:100%; margin:0em; font-family:inherit; font-size:100%}
div.source code {display:block; border:1px solid #C5C5EC; background-color:#F0F5FF; padding:6px; color:#000000}
div.doc-source {margin-top:1.4em; margin-bottom:1.3em}
div.doc-source pre {display:table; width:100%; margin:0em; font-family:inherit; font-size:100%}
div.doc-source code {display:block; background-color:#E0E0E0; padding:4px}
.kw {color:#000080; font-weight:bold}
.str {color:#CC0000}
.cmt {color:#008000}
p.demo {text-align:center; margin-top:-0.9em}
a.demo {text-decoration:none; font-weight:bold; color:#0000CC}
a.demo:link {text-decoration:none; font-weight:bold; color:#0000CC}
a.demo:hover {text-decoration:none; font-weight:bold; color:#0000FF}
a.demo:active {text-decoration:none; font-weight:bold; color:#0000FF}
</style>

<?php
date_default_timezone_set('Asia/Bangkok');
require('fpdf.php');

class PDF extends FPDF
{
//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{
	//Header
	$w=array(30,30,30,25,30,30);
	//Header
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],6,$header[$i],1,0,'C');
	$this->Ln();
	//Data
	foreach ($data as $eachResult) 
	{
		$this->Cell(30,6,$eachResult["eid"],1);
		$this->Cell(30,6,$eachResult["name"],1);
		$this->Cell(30,6,$eachResult["surename"],1);
		$this->Cell(25,6,$eachResult["job"],1,0,'C');	
		$this->Cell(30,6,$eachResult["sumot"],1,0,'C');
		$this->Cell(30,6,$eachResult["sum"],1,0,'C');
		$this->Ln();
	}
}

//Better table
function ImprovedTable($header,$data)
{
	//Column widths
	$w=array(30,30,30,25,30,30);
	//Header
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],6,$header[$i],1,0,'C');
	$this->Ln();
	//Data

	foreach ($data as $eachResult) 
	{
		$this->Cell(30,6,$eachResult["eid"],1);
		$this->Cell(30,6,$eachResult["name"],1);
		$this->Cell(30,6,$eachResult["surename"],1);
		$this->Cell(25,6,$eachResult["job"],1,0,'C');
		$this->Cell(30,6,$eachResult["sumot"],1,0,'C');
		$this->Cell(30,6,$eachResult["sum"],1,0,'C');
		$this->Ln();
	}





	//Closure line
	$this->Cell(array_sum($w),0,'','T');
}

//Colored table
function FancyTable($header,$data)
{
	//Colors, line width and bold font
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	//Header
	$w=array(20,30,55,25,30,30);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	//Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	//Data
	$fill=false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
		$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
	    $this->Cell($w[4],6,$row[4],'LR',0,'R',$fill);
		$this->Cell($w[5],6,$row[5],'LR',0,'R',$fill);
		$this->Ln();
		$fill=!$fill;
	}
	$this->Cell(array_sum($w),0,'','T');
}
}

$pdf=new PDF();
//Column titles
$header=array('EID','Name','Surname','Job',	'OT','SumOT');
//Data loading

//*** Load MySQL Data ***//
require("connect.php");
session_start();
$month =$_SESSION["month"];
$year =$_SESSION["year"];
$b1=$_SESSION["b1"];
$b2=$_SESSION["b2"];

require("connect.php");
if($month<=9){
	$s="0";
	$month="$s$month";
$strSQL = "SELECT DISTINCT t.timeEID, e.* ,t.sumot,t.sum FROM employee e, time t where t.timeEID=e.eid  and  date  LIKE '$year-$month%'";
$objQuery = $conn->query($strSQL);
}else if($month>=10){
$strSQL = "SELECT DISTINCT t.timeEID, e.* ,t.sumot,t.sum FROM employee e, time t where t.timeEID=e.eid  and  date  LIKE '$year-$month%'";
$objQuery = $conn->query($strSQL);
}
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);
}

//***********************

$txt="Employee salary in $month/$year"; 
$txt2="                                                                                      	            total     :            $b2                 $b1 ";
$pdf->SetFont('Times','B',11);

//*** Table 1 ***//
$pdf->AddPage();
$pdf->Image('pic/scgl.jpg',80,15,50);
$pdf->Cell(0,50,$txt,0,1,"C");
$pdf->Ln(-20);
$pdf->BasicTable($header,$resultData);
$pdf->Cell(0,8,$txt2,0,0);

$pdf->Output("MyPDF/MyPDF.pdf","F");


	
?>
<script type = "text/javascript">
window.setTimeout("autoClick()", 1); 

function autoClick() {
var linkPage = document.getElementById('dynLink').href;
window.location.href = linkPage;
}
</script>  

PDF Created Click <a href="MyPDF/MyPDF.pdf" id="dynLink">here</a> to Download
</body>
</html>
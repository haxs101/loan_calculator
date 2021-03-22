<?php

$name=$_POST['fname'];
$idNumber = $_POST['idNumber'];
$interestRate = $_POST['interestRate'];
$amount = $_POST['amount'];
$monthlyPayment = $_POST['monthlyPayment'];
$totalPayment = $_POST['totalPayment'];

if(!empty($_POST['yearSelect'])){
	foreach($_POST['yearSelect'] as $yearSelected){
	  echo '  ' . $yearSelected . $name . $idNumber . $interestRate. $amount. $monthlyPayment. $totalPayment;
	}
  }else{
	echo 'Please select a value!';
  }

$date = date(m-d-y);

$html = '
<html>
<head>
<style>
body {font-family: sans-serif;
	font-size: 10pt;
}
p {	margin: 0pt; }
table.items {
	border: 0.1mm solid #000000;
}
td { vertical-align: top; }
.items td {
	border-left: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
	text-align: center;
	border: 0.1mm solid #000000;
	font-variant: small-caps;
}
.items td.blanktotal {
	background-color: #EEEEEE;
	border: 0.1mm solid #000000;
	background-color: #FFFFFF;
	border: 0mm none #000000;
	border-top: 0.1mm solid #000000;
	border-right: 0.1mm solid #000000;
}
.items td.totals {
	text-align: right;
	border: 0.1mm solid #000000;
}
.items td.cost {
	text-align: "." center;
}
</style>
</head>
<body>
<!--mpdf
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style=" "><span style="font-weight: bold; font-size: 14pt;">Loan Receipt</span>
<span>Date: '.$date.'</span></td>
<td width="50%" style="text-align: right;">ID Number<br /><span style="font-weight: bold; font-size: 9pt;">'.$idNumber.'</span></td>
</tr></table>
</htmlpageheader>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->


<br />
<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
<thead>
<tr>
<td width="20%">Name</td>
<td width="20%">Amount</td>
<td width="10%">Year/s</td>
<td width="10%">Interest</td>
<td width="20%">Monthly Payment</td>
<td width="20%">Total Payment</td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->
<tr>
<td align="center">'.$name.'</td>
<td align="center">&#8369;'.$amount.'</td>
<td align="center">'.$yearSelected.'</td>
<td align="center">'.$interestRate.'</td>
<td class="cost">&#8369;'.$monthlyPayment.'</td>
<td class="cost">&#8369;'.$totalPayment.'</td>
</tr>


</tbody>
</table>
<div style="text-align: center; font-style: italic;">Payment terms: payment due in 30 days</div>
</body>
</html>
';

$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'margin_left' => 20,
	'margin_right' => 15,
	'margin_top' => 48,
	'margin_bottom' => 25,
	'margin_header' => 10,
	'margin_footer' => 10
]);

$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Loan Receipt");
$mpdf->SetAuthor("Loan Receipt");
$mpdf->SetWatermarkText("Loan Receipt");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html);

$mpdf->Output();


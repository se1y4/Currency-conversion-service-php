<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
	}
	h2{
		text-align: center;
	}
	table{
		margin:0px auto;
	}
</style>
</head>

<body>

<form align="center" action="currencyconvertor.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
	<td>
	<br><center>From:<select name='cur1'>
    <option value="AUD">AUD</option>
	 <option value="AZN" selected>AZN</option>
     <option value="GBP" selected>GBP</option>
     <option value="AMD" selected>AMD</option>
     <option value="BYN" selected>BYN</option>
     <option value="BGN" selected>BGN</option>
     <option value="BRL" selected>BRL</option>
     <option value="HUF" selected>HUF</option>
     <option value="VND" selected>VND</option>
     <option value="HKD" selected>HKD</option>
     <option value="GEL" selected>GEL</option>
     <option value="DKK" selected>DKK</option>
     <option value="AED" selected>AED</option>
     <option value="USD" selected>USD</option>
     <option value="EUR" selected>EUR</option>
     <option value="EGP" selected>EGP</option>
     <option value="INR" selected>INR</option>
     <option value="IDR" selected>IDR</option>
     <option value="KZT" selected>KZT</option>
     <option value="CAD" selected>CAD</option>
     <option value="QAR" selected>QAR</option>
     <option value="KGS" selected>KGS</option>
     <option value="CNY" selected>CNY</option>
     <option value="MDL" selected>MDL</option>
     <option value="NZD" selected>NZD</option>
     <option value="NOK" selected>NOK</option>
     <option value="PLN" selected>PLN</option>
     <option value="RON" selected>RON</option>
     <option value="XDR" selected>XDR</option>
     <option value="SGD" selected>SGD</option>
     <option value="TJS" selected>TJS</option>
     <option value="THB" selected>THB</option>
     <option value="TRY" selected>TRY</option>
     <option value="TMT" selected>TMT</option>
     <option value="UZS" selected>UZS</option>
     <option value="UAH" selected>UAH</option>
     <option value="CZK" selected>CZK</option>
     <option value="SEK" selected>SEK</option>
     <option value="CHF" selected>CHF</option>
     <option value="RSD" selected>RSD</option>
     <option value="ZAR" selected>ZAR</option>
     <option value="KRW" selected>KRW</option>
     <option value="JPY" selected>JPY</option>
	
	</select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
    <option value="AUD">AUD</option>
	 <option value="AZN" selected>AZN</option>
     <option value="GBP" selected>GBP</option>
     <option value="AMD" selected>AMD</option>
     <option value="BYN" selected>BYN</option>
     <option value="BGN" selected>BGN</option>
     <option value="BRL" selected>BRL</option>
     <option value="HUF" selected>HUF</option>
     <option value="VND" selected>VND</option>
     <option value="HKD" selected>HKD</option>
     <option value="GEL" selected>GEL</option>
     <option value="DKK" selected>DKK</option>
     <option value="AED" selected>AED</option>
     <option value="USD" selected>USD</option>
     <option value="EUR" selected>EUR</option>
     <option value="EGP" selected>EGP</option>
     <option value="INR" selected>INR</option>
     <option value="IDR" selected>IDR</option>
     <option value="KZT" selected>KZT</option>
     <option value="CAD" selected>CAD</option>
     <option value="QAR" selected>QAR</option>
     <option value="KGS" selected>KGS</option>
     <option value="CNY" selected>CNY</option>
     <option value="MDL" selected>MDL</option>
     <option value="NZD" selected>NZD</option>
     <option value="NOK" selected>NOK</option>
     <option value="PLN" selected>PLN</option>
     <option value="RON" selected>RON</option>
     <option value="XDR" selected>XDR</option>
     <option value="SGD" selected>SGD</option>
     <option value="TJS" selected>TJS</option>
     <option value="THB" selected>THB</option>
     <option value="TRY" selected>TRY</option>
     <option value="TMT" selected>TMT</option>
     <option value="UZS" selected>UZS</option>
     <option value="UAH" selected>UAH</option>
     <option value="CZK" selected>CZK</option>
     <option value="SEK" selected>SEK</option>
     <option value="CHF" selected>CHF</option>
     <option value="RSD" selected>RSD</option>
     <option value="ZAR" selected>ZAR</option>
     <option value="KRW" selected>KRW</option>
     <option value="JPY" selected>JPY</option>
	
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
</form>
<?php

$json = file_get_contents('file.json');
$data = json_decode($json, true);

function convertCurrency($from, $to, $amount, $data)
{
    $fromRate = $data['Valute'][$from]['Value'];
    $toRate = $data['Valute'][$to]['Value'];

    if ($fromRate && $toRate) {
        $convertedAmount = $amount * ($toRate / $fromRate);
        return $convertedAmount;
    } else {
        return false;
    }
}

$fromCurrency = $_POST['cur2'];
$toCurrency = $_POST['cur1'];
$amount = $_POST['amount'];

$convertedAmount = round((convertCurrency($fromCurrency, $toCurrency, $amount, $data)), 2);

if ($convertedAmount) {
    echo $amount . ' ' . $toCurrency . ' = ' . $convertedAmount . ' ' . $fromCurrency;
}
?>
</body>
</html>
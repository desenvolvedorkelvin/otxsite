<?php
require_once('./custom_scripts/paypal/config.php');
$bonusPoints = $config['site']['bonusPoints'];
if ($action == ""){
$main_content .='
<script>
function validate_form(thisform){
with (thisform){
if(rules.checked==false){
alert(\'Para prosseguir com a doação você deve concordar com os termos acima!\');return false;
}}}
</script>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Donation Rules</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
 <tbody><tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
We inform the players and collaborators that <b>'.$config['server']['serverName'].' Old Tibia Server</b> has no financial interest. All income obtained is directly reapplied for server maintenance - this means that when you do a donation, you are ensuring the stability and increasing quality of it.
The points that are transferred to players who perform donations dont represent nothing more than our gratification, that is, you are not buying points but receiving a symbolic gratification (in form of points) which benefits you ingame; you can use your points anyway you want.
The spirit of this system is simple: with the intention of get closer to the players and make you feel at home, we understand your donation as a two-way street in the question credibility. Believing that it is worth investing in server maintenance, we invest in you by giving points, as mentioned earlier, can be used the way you want.
Check out our <a href="index.php?subtopic=shopsystem">'.$config['server']['serverName'].' Shop</a> and learn how to take advantage of your points in the most profitable way..</br>

<h3>Frequently Asked questions</h3></br>
<b>But what are Premium Points?</b>
Premium Points is part of our donation system, with them you can purchase a Premium Account or something else that is available in the Shopping Online or ingame.</br></br>


<b>How to make a donation?</b>
<br />Click the <b>"Continue"</b> and follow all procedures to make your donation.
<br />
<br />
<hr>
<div align="center">
<b>Donation terms</b>
<br /><INPUT TYPE="checkbox" NAME="rules" id="rules" value="true" /> I accept the terms and wish to proceed.<br />
<small style="color: red;">Be aware of the terms of donation before proceeding!</small>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<form action="?subtopic=buypoints&action=agreement" method="post" onsubmit="return validate_form(this)">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';}
if ($action == "agreement"){
if(!$logged) {
$link = "index.php?subtopic=buypoints&action=agreement";
include("login.php");
}
else
{
$buy_name = stripslashes(urldecode($_POST['buy_name']));
$main_content .= '
<br /><br />
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="100%"> 
<form action="index.php?subtopic=buypoints&action=tipo" method="POST">
<input type="hidden" name="char_name" value=""> 
<TR BGCOLOR="#505050"> 
<TD CLASS="white" COLSPAN="3"><b>Select a payment method</b></TD> 
</TR>';
if ($config['site']['pagseguro'] == 1){
$main_content .='
	<TR BGCOLOR=#3a3738>
		<TD>';
			if ($bonusPoints > 1){
			if ($bonusPoints <= 4){$main_content .='<b>[Bônus Points <font color="#FF0000">x'.$bonusPoints.'</font>]</b><br />';}
			if ($bonusPoints >= 5){$main_content .='<b>[Bônus Points <font color="#FF0000" style="font-size:18px;font-weight:bold;">Extreme x'.$bonusPoints.'!</font>]</b><br />';}
			}
		$main_content .='<input type="radio" name="method" value="1" />&nbsp;PagSeguro - <b>Cartões de crédito&nbsp;<i>/</i>&nbsp;Boleto&nbsp;<i>/</i>&nbsp;Transferência bancária</b>
		</TD>
	</TR>';}
if ($config['site']['paypal'] == 1){
		$main_content .='
		<TR BGCOLOR=#3a3738>
			<TD><input type="radio" name="method" value="2" />&nbsp;Paypal - <b>Credit Cards/International Transactions</b></TD>
		</TR>';}
if ($config['site']['paypalbr'] == 1){
		$main_content .='
		<TR BGCOLOR=#3a3738>
			<TD><input type="radio" name="method" value="4" />&nbsp;Paypal Brasil - <b>Cartões de crédito&nbsp;/Transaçao Nacional</b></TD>
		</TR>';}		
		if ($config['site']['caixa'] == 1){
		$main_content .='
		<TR BGCOLOR=#3a3738>
			<TD><input type="radio" name="method" value="3" />&nbsp;PAGAMENTO VIA PIX - <b>Transferência via PIX</b></TD>
		</TR>';}
		if ($config['site']['caixa'] == 0 && $config['site']['pagseguro'] == 0 && $config['site']['paypal'] == 0){
		$main_content .='
		<TR BGCOLOR="#3a3738" padding="10px">
			<TD><b style="color: red; padding: 5px;">Nenhuma forma de pagamento disponível no momento.</b></TD>
		</TR>';
		}
$main_content .='
</TABLE>
</tbody>
</table>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>';
if ($config['site']['caixa'] == 1 || $config['site']['pagseguro'] == 1 || $config['site']['paypal'] == 1 || $config['site']['paypalbr'] == 1){
$main_content .='
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=pag_form">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>';
}
$main_content .='
</td>
</tr>
</tbody>
</table>';
}
$_SESSION["nome"] = stripslashes(urldecode($_POST['method']));}
elseif($action == 'tipo'){
if(!$logged){
$main_content .= '
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS="white"><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD>Please, log in so you can proceed with the operation.<br /><a href="index.php?subtopic=accountmanagement">It is here log</a>. If you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.</TD>
</TR>
</TABLE>';
}else{
$buy_tipo = stripslashes(urldecode($_POST['method']));
if($buy_tipo == 0) { $main_content .='
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR="'.$config['site']['vdarkborder'].'">
<TD CLASS=white><b>Error</b></td>
</TR>
<TR BGCOLOR='.$config['site']['darkborder'].'>
<TD><b style="color: red;">No payment method has been selected.</b><br /><i>Select a form of payment available to give procedure.</i></TD>
</TR>
</TABLE>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;"> 
<a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=agreement">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
';}
if($buy_tipo == 1) {

if ($bonusPoints >= 2){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Bônus Points!</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td>';
if ($bonusPoints >= 2){
$main_content .= '<div style="font-size: 20px; font-weight: bold; color: red;">Points x'.$bonusPoints.'</div>';
}
$main_content .='
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />';
}
$_POST['item_quant_1'];
$_POST['item_descr_1'];
$_POST['account_namev'];
$_POST['emailv'];
$_POST['character_namev'];
$main_content .='
<form action="?subtopic=buypoints&action=confirmacao" method="post" enctype="application/x-www-form-urlencoded">
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Account Information</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
</tr>
<tr>
<td><b>Acc Name:</b></td>
<td><input type="hidden" value="'.$account_logged->getCustomField("name").'" name="emailv" />'.$account_logged->getCustomField("name").'</td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><input type="hidden" value="' . $account_logged->getCustomField("email") . '" name="emailv" />' . $account_logged->getCustomField("email") . '</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table>
<td width="10%"><b>Points:</b></td>
<td>
<select name="item_valor_1">
<option value="1000">30 Premium Points / 10,00</option>
<option value="3000">90 Premium Points / 30,00</option>
<option value="5000">150 Premium Points / 50,00</option>
</select>
</td>
</tr>
</table>
<br />
<small>Todos os pagamentos feito com forma de pagamento pagseguro são totalmente automatizados. São entregues os pontos assim que o pagseguro confirma a transferencia. <br />
<b style="color: red;">Nenhum membro da equipe tem a autorização e permissão para ter acesso ao painel de pontos do servidor. Todos os mesmos são adicionados por nossos sistemas inteligentes.</b></small>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</table>
';
}
if($buy_tipo == 3) {
$main_content .='
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS=white><B>Boleto Casa Loterica</B></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><pre>' . $config['site']['CaixaCont'] . '</pre>
</tr>
</TABLE>
<br />
<center>
<a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>
</a>
</center>';
}
if($buy_tipo == 2) {
$main_content .='
<b>PayPal Shop System</b><br /><br />
The shop costs:
<ul><li> 5 EUR (for 30 points)</li>
<li> 11 EUR  (for 90 points)</li><li> 18 EUR  (for 150 points)</li></ul>
<br />
<b>Here are the steps you need to make:</b> <br />
1. A PayPal account with a required balance [5, 11 or 28 EUR] or a creditcard. <br />
2. Fill in your account number. <br />
3. Click on the Buy Now button or your creditcard brand. <br />
4. Make a transaction. <br />
5. After the transaction 30, 100 or 150 points will be automatically added to your account. <br />
6. Go to Item shop and use your points <br /> <br /> <br />

<span style="color:red">If you recall the money, and your premium points can\'t be recalled your account will be deleted.</span>
<br />
<br />
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white"><b>Paypal</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="'.$config['paypal']['email'].'">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Premium points">
<b>Character Name:</b> <input type="text" name="custom" value="" style="padding: 5px;" autocomplete="off">

<select name="amount">
  <option value="5.00">5 EUR</option>
  <option value="11.00">11 EUR</option>
  <option value="18.00">18 EUR</option>
</select>
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="notify_url" value="'.$config['server']['url'].'/paypal_report.php">
<input type="hidden" name="return" value="'.$config['server']['url'].'">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="submit" value="Submit" style="padding: 5px;" />
</form></td>
</tr>
</TABLE>
';}
if($buy_tipo == 4) {
$main_content .='
<b>PayPal Shop System</b><br /><br />
Preços da Loja:
<ul><li> 15 Reais (30 points)</li>
<li> 30 Reais  (90 points)</li><li> 50 Reais  (150 points)</li></ul>
<br />
<b>Aqui estão os passos que você precisa fazer:</b> <br />
1. Uma conta do PayPal com com saldo necessário [15, 30 ou 45 BRL] ou um cartao de credito. <br />
2. Preencha os campos necessarios<br />
3. Clique no botão Comprar agora ou na marca do seu cartão de crédito. <br />
4. Finalize a transaçao. <br />
5. Após a operação de 30, 100 ou 150 pontos será automaticamente adicionado à sua conta. <br />
6. Vá ate a loja e use seus pontos. <br /> <br /> <br />

<span style="color:red">Nao faça transaçao indevida voce perderá seus pontos e sua conta sera deletada.</span>
<br />
<br />
<style>
	.paypal
	{
		border-collapse:collapse;
	}
	.paypal, td, th
	{
	border:1px solid black;
	padding: 3px 9px;
	}
	</style>
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%" class="paypal>
<tr BGCOLOR="'.$config['site']['vdarkborder'].'">
<td CLASS="white" style="padding: 10px 5px;" colspan="2"><b>Paypal</b></td>
</tr>
<tr BGCOLOR='.$config['site']['darkborder'].'>
<td>';
foreach($paypals as $paypal)
	{
		$main_content .= '<tr>
		<td>Buy ' . $paypal['name'] . '<br /><br /></td>
		<td style="text-align:center">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="' . $paypal_payment_type . '">
		<input type="hidden" name="business" value="' . $paypal['mail'] . '">
		<input type="hidden" name="item_name" value="' . htmlspecialchars($paypal['name']) . '">
		<input type="hidden" name="custom" value="' . $account_logged->getID() . '">
		<input type="hidden" name="amount" value="' . htmlspecialchars($paypal['money_amount']) . '">
		<input type="hidden" name="currency_code" value="' . htmlspecialchars($paypal['money_currency']) . '">
		<input type="hidden" name="no_note" value="0">
		<input type="hidden" name="no_shipping" value="1">
		<input type="hidden" name="notify_url" value="' . $paypal_report_url . '">
		<input type="hidden" name="return" value="' . $paypal_return_url . '">
		<input type="hidden" name="rm" value="0">
		<input type="image" src="' . $paypal_image . '" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
		</form></td>
		</tr>';
	}
$main_content .= '</td>
</tr>
</TABLE>
';}
}
}
if ($action == "confirmacao"){
$main_content .='
Após confirmar esta etapa, você automaticamente aceitará os Termos de Compra</a> do servidor <b>'.$config ['server']['serverName'].'</b>. <u>Leia e esteja de acordo com os termos.</u><br /><br />
<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
<input type="hidden" name="email_cobranca" value="' . $config['pagseguro']['email']. '">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">

<input type="hidden" name="item_id_1" value="1">
<input type="hidden" name="item_descr_1" value="' . $config['pagseguro']['produtoNome'] . '">

<input type="hidden" name="item_frete_1" value="0">
<input type="hidden" name="item_quant_1" value="1">
<input type="hidden" name="item_peso_1" value="0">
<input type="hidden" name="ref_transacao" value="' . $account_logged->getCustomField("name").'">
<input type="hidden" name="item_valor_1" value="'.$_POST['item_valor_1'].'">';

$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Points to buy</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%"><strong>ACC Name:</strong></td>
<td>' . $account_logged->getName() . '</td>
</tr>
<tr>
<td><strong>Email:</strong></td>
<td>'.$_POST['emailv'].'</td>
</tr>
<tr>
<!--td><strong>Quant. Points:</strong></td>
<td>';
$main_content .= $_POST['item_valor_1'] * 2;
$main_content .='</td> 
</tr-->';
if ($bonusPoints >= 2){
$main_content .='
<tr>
<td><strong>Bônus Points:</strong></td>
<td>';
$main_content .= '<b>x&nbsp;'.$bonusPoints.'</b>';
$main_content .='</td>
</tr>';}
$main_content .='
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table width="100%">
<tbody>
<tr align="center">
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td style="border: 0px none;">

<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_continue.gif" type="image">
</div>
</div>

</form>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center>
';}
if ($action == "realizado"){
$main_content .='
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Pedido Realizado</div> 
<span class="CaptionVerticalRight" style="background-image: url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url('.$layout_name.'/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url('.$layout_name.'/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="8%" valign="top"><img src="images/account/account-status_green.gif" width="52" height="52" /></td>
    <td width="86%" align="left"><div style="font-weight:bold;font-size:16px; margin-bottom: -10px;">Pedido realizado com sucesso!</div><br />Recebemos seu pagamento com sucesso, dentro de 5 minutos seus pontos serão creditados. Agradecemos por sua colaboração!<br /><small>Att, Yours Community</small></td>
  </tr>
</table>
<br /><br />
<b style="color: red">Não tente nenhum tipo de fraude, pois sua conta será penalizada!</b>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url('.$layout_name.'/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url('.$layout_name.'/images/buttons/sbutton_over.gif);"></div>
<form action="index.php?subtopic=history" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';
}
?>
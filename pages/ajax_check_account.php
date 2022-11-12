<?php
if(!defined('INITIALIZED'))
	exit;

echo '<?xml version="1.0" encoding="utf-8" standalone="yes"?>';
$account = strtoupper(trim($_REQUEST['account']));
if(empty($account))
{
	echo '<font color="red">Please enter an account number.</font>';
	exit;
}
if(strlen($account) < 9)
if(strlen($account) > 4)	
{
	if(!check_account_name($account))
	{
		echo '<font color="red">Invalid account name format. Use only numbers 0-9.</font>';
		exit;
	}
	$account_db = new Account();
	$account_db->find($account);
	if($account_db->isLoaded())
		echo '<font color="red">Account with this name already exist.</font>';
	else
		echo '<font color="green">Good account name ( '.htmlspecialchars($account).' ). You can create account.</font>';
}
else
    echo '<font color="red">Account name is too short, use only numbers 0-9 (min. 5 chars).</font>';
else
	echo '<font color="red">Account name is too long, use only numbers 0-9 (max. 8 chars).</font>';
exit;
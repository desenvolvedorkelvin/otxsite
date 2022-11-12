<?php
// CONFIGURAÇOES PAYPAL
$paypal_report_url = 'https://site.com/paypal_report.php';
$paypal_return_url = 'https://site-old.com/?subtopic=accountmanagement';
$paypal_image = 'https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif';
$paypal_payment_type = '_xclick'; // '_xclick' (Buy Now) or '_donations'

$paypals[0]['mail'] = $config['paypal']['email']; // your paypal login
$paypals[0]['name'] = '1 premium points + 1 premium points DOUBLE no server por R$ 1,00';
$paypals[0]['money_amount'] = '1.00';
$paypals[0]['money_currency'] = 'BRL'; // USD, EUR, more codes: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
$paypals[0]['premium_points'] = 30;

$paypals[1]['mail'] = $config['paypal']['email']; // your paypal login
$paypals[1]['name'] = '5 premium points + 5 premium points DOUBLE no server por R$ 5,00';
$paypals[1]['money_amount'] = '11.00';
$paypals[1]['money_currency'] = 'BRL'; // USD, EUR, more codes: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
$paypals[1]['premium_points'] = 100;

$paypals[2]['mail'] = $config['paypal']['email']; // your paypal login
$paypals[2]['name'] = '10 premium points + 10 premium points DOUBLE no server por R$ 10,00';
$paypals[2]['money_amount'] = '18.00';
$paypals[2]['money_currency'] = 'BRL'; // USD, EUR, more codes: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
$paypals[2]['premium_points'] = 150;

$paypals[3]['mail'] = $config['paypal']['email']; // your paypal login
$paypals[3]['name'] = '20 premium points + 20 premium points DOUBLE no server por R$ 20,00';
$paypals[3]['money_amount'] = '50.00';
$paypals[3]['money_currency'] = 'BRL'; // USD, EUR, more codes: https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_api_nvp_currency_codes
$paypals[3]['premium_points'] = 200;

// CONFIGURAÇOES PAYPAL
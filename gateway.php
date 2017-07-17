<?php
if($modx->context->get('key') != "mgr"){
/* grab the current langauge from the cultureKey request var */
switch ($_REQUEST['cultureKey']) {

case 'de':
$modx->switchContext('German');
break;

case 'cn':
$modx->switchContext('ChineseSimplified');
break;

case 'hk':
$modx->switchContext('Chinese');
break;

case 'no':
$modx->switchContext('Norwegian');
break;

case 'nl':
$modx->switchContext('Dutch');
break;

case 'jp':
$modx->switchContext('Japanese');
break;

case 'cz':
$modx->switchContext('Czech');
break;

default:
/* Set the default context here */
$modx->switchContext('web');
break;
}

/* unset GET var to avoid
*  appending cultureKey=xy to URLs by other components */
unset($_GET['cultureKey']);
}
<?php

session_start();

if (file_exists( '../includes/config.php' )) { require( '../includes/config.php'); }  else { header( 'Location: ../install' );};
    if(base64_decode($_SESSION['loggedin']) == 'true') {}
      else { header('Location: ../login.php'); }

$postvars = array(
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-delete-web-domain','arg1' => $username,'arg2' => $_GET['domain']),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-delete-dns-domain','arg1' => $username,'arg2' => $_GET['domain']),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-delete-mail-domain','arg1' => $username,'arg2' => $_GET['domain']),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-restart-web'),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-restart-proxy'),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-restart-mail')
);
   
$curl0 = curl_init();
$curl1 = curl_init();
$curl2 = curl_init();
$curl3 = curl_init();
$curl4 = curl_init();
$curl5 = curl_init();
$curlstart = 0; 

if($_GET['verified'] == "yes"){
    while($curlstart <= 5) {
        curl_setopt(${'curl' . $curlstart}, CURLOPT_URL, $vst_url);
        curl_setopt(${'curl' . $curlstart}, CURLOPT_RETURNTRANSFER,true);
        curl_setopt(${'curl' . $curlstart}, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(${'curl' . $curlstart}, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt(${'curl' . $curlstart}, CURLOPT_POST, true);
        curl_setopt(${'curl' . $curlstart}, CURLOPT_POSTFIELDS, http_build_query($postvars[$curlstart]));
        $curlstart++;
    } 

curl_exec($curl0);
curl_exec($curl1);
curl_exec($curl2);
curl_exec($curl3);
curl_exec($curl4);
curl_exec($curl5);
}

// If accessed directly, redirect to 403 error
header('Location: ../error-pages/403.html');
?>
<?php
require_once("braintree_init.php");

$response = array('client_token' => Braintree\ClientToken::generate());
echo json_encode($response);

?>

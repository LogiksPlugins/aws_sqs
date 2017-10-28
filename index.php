<?php
if(!defined('ROOT')) exit('No direct script access allowed');

include_once __DIR__."/sqs.php";

if(!defined('awsAccessKey')) define('awsAccessKey', AWS_ACCESS_KEY);
if(!defined('awsSecretKey')) define('awsSecretKey', AWS_SECRET_KEY);

if(!function_exists("pushToQueue")) {
	function pushToQueue($type,$data,$dbResponse=[],$q=[]) {
		$type=strtoupper($type);
	}
	function checkQueue() {
		return true;
	}
	function pullFromQueue() {
		$data=[];
		
		
		return $data;
	}
}

?>

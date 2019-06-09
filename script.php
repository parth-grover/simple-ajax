<?php 
include("C:/xampp/htdocs/test_ajax/include.php");

function getList($values)
{
	$response = new ajax;
	$response->assign("form_success_msg",'innerHTML',$values["email"]);
	$response->assign("email",'value',$values['password']);
	$response->script("alert('hello');");
	echo $response->output;
}	


function error()
{
	echo 'console.error("function Not Exist");';
}
?>
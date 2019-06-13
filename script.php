<?php 
include("C:/xampp/htdocs/simple-ajax/include.php");

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
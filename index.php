<form id="contact_form" method="post">
	<div>
		<input type="email" name="email" id="email" placeholder="Enter Email">
		<span id="form_err_msg"></span>
	</div>
	<div>
		<input type="password" name="password" id="password" placeholder="Enter Password">
		<span id="form_err_msg"></span>
	</div>
	<input type="submit" value="Submit" id="submit">
	<div id="form_success_msg"></div>
</form>


<ol id="new-projects"></ol>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/test_ajax/ajax.js"></script>

<script>
 $('#contact_form').submit(function(e){
	 e.preventDefault();
	//ajax_post('getList',JSON.stringify({hello:'hello',hello1:'hello1',hello2:'hello2'}));
	//ajax_post('getList',JSON.stringify(['hello','hello1','hello2']));
	ajax_form_post('http://localhost/test_ajax/script','getList',$("#contact_form").serializeArray());
})
</script>
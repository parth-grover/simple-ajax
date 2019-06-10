<html>
<head>
	<title>Ajax Framework</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/test_ajax/ajax.js"></script>
</head>
<body>
	<div class="container my-5">
		<h1 class="text-center">Simple Ajax Framework</h1>
		<form id="contact_form" method="post">
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="Password">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Phone</label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
		  </div>
		  <div class="form-check">
			<input type="checkbox" class="form-check-input" id="check" name="check">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <div id="form_success_msg"></div>
		</form>
	

	
		<h1 class="mt-5">Some points to consider</h1>
		<ul class="list-group">
		  <li class="list-group-item">Make sure input type has <b>name attribute</b></li>
		  <li class="list-group-item">Use <b>"ajax_form_post"</b> with form id for whole form data</li>
		  <li class="list-group-item">Use <b>"ajax_post"</b> for particulars Values</li>
		  <li class="list-group-item">ajax_form_post Syntex <b>"ajax_form_post('http://localhost/test_ajax/script','getList',$("#contact_form").serializeArray());"</b></li>
		  <li class="list-group-item">ajax_post Syntex <b>"ajax_post('getList',JSON.stringify({hello:'hello',hello1:'hello1',hello2:'hello2'}));"</b></li>
		</ul>
	</div>
</body>


<script>
 $('#contact_form').submit(function(e){
	 e.preventDefault();
	//ajax_post('getList',JSON.stringify({hello:'hello',hello1:'hello1',hello2:'hello2'}));
	//ajax_post('getList',JSON.stringify(['hello','hello1','hello2']));                                  /// pass array when want to submit some data
	ajax_form_post('http://localhost/test_ajax/script','getList',$("#contact_form").serializeArray());   /// Pass form id when want to submit whole form data
})
</script>
</html>
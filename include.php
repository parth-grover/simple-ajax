<?php

function __autoload($class){
	if(file_exists("C:/xampp/htdocs/test_ajax/class/$class.php")):
		require_once("C:/xampp/htdocs/test_ajax/class/$class.php");
	endif;	
}



if(isset($_POST['function2call']) && !empty($_POST['function2call'])) {
			$function2call = $_POST['function2call'];
			if(function_exists($function2call)):
				$json_encoded_formvalues = $_POST["ajax_data"];
				if(isset($_POST["form_data"])){
					$all_data = array_column($json_encoded_formvalues, 'value', 'name');
				}else{
					$all_data = (array)json_decode($json_encoded_formvalues);
				}
				$function2call($all_data);
			else:
					error();
			endif;
}

?>
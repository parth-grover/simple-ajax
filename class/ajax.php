<?php
class ajax{
	var $output;
	function __construct()
	{
		$this->output = "";
	}
	
	public function assign($element_id, $property,$value)
    {
        $value = trim(preg_replace('/\s+/', ' ', $value));
        $this->output .= 'document.getElementById("'.$element_id.'").'.$property.'="'.addslashes($value).'";';
    }
	
	 public function script($script)
    {
         $script = trim(preg_replace('/\s+/', ' ', $script));
        $this->output .= $script.';';
    }
	
	public function redirect($link)
    {
        $this->output .= 'window.location.href = \''.$link.'\';';
    }
    public function alert($alert_text)
    {
        $this->output .= 'swal(\''.$alert_text.'\');';
    }
    
    public function append($element_id, $value)
    {
        $value = trim(preg_replace('/\s+/', ' ', $value));
        $value = stripslashes($value);
        $this->output .= '$("#'.$element_id.'").append(\''.addslashes($value).'\');';
    }
    public function remove($element_id)
    {
        $this->output .= '$("#'.$element_id.'").remove();';
    }
}
?>
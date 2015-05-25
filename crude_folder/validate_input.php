<?php
class Validate_Input{
	public $input;
	public $pattern;
	function __construct($ptrn,$input){
		$this->input=$input;
		$this->pattern=$ptrn;
	}
	function check_user(){
		
		if(preg_match($this->pattern, $this->input)){
			return 1;
		}else{
			return 0;
		}
	}
	function check_password($input){

	}

}
?>
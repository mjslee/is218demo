<?php 


class person {
	
	// explicitly adding class properties are optional - but is good practice
	var $name;	

	function __construct($persons_name) {
	
		$this->name = $persons_name;
	}
	
	
	public function get_name() {
		
		return $this->name;
	
	}
	
	//protected methods and properties restrict access to those elements.
	protected function set_name($new_name) {
	
		if (name == "Rick Grimes") {
			$this->name = strtoupper($new_name);
		}
		else {
			$this->name = $new_name;
		}
		
	}


} 

// 'extends' is the keyword that enables inheritance
class employee extends person {

	protected function set_name($new_name) {
	
		if ($new_name == "Morgan Jones") {
			parent::set_name($new_name);
		}
		else {
			$this->name = $new_name;
		}
		
	}
	
	function __construct($employee_name) {
	
		$this->set_name($employee_name);
	
	}
	
	

}
 
 
 
?>

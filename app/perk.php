<?php 

//Parent class starts here
class PersonBase {

	public $age;     
	public $height = 0;

	public function addHeight($inches) { 	
		$this->height = $this->height+$inches;
		return $this->height;
	}

	public function getHeight() {
		if ($height == 0) {
        	throw new Exception('Oops! Looks like the height is zero');
		} 
		else {
			return height;
		}
	}

	public function setRandomAge() {
		$age = rand(18,90);
	}

	public function saySomething() {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://baconipsum.com/api/?type=all-meat&sentences=1&start-with-lorem=1');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$message = curl_exec($ch);
		curl_close($ch);
		return $message;
	}

}

//Child class starts here

class Person extends PersonBase {

	public function saySomething() {
		return strrev(parent::saySomething());
	}

}


?>
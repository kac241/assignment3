<?php

	class ParentClass 
	{

		protected $firstName;
		protected $lastname;

		public function __construct($firstName, $lastName) 
		{
			$this->firstName = $firstName;
			$this->lastName  = $lastName;
		}

		public function __toString() 
		{
			
			return "  You are " .
					ucfirst(substr(($this->firstName), 1, ceil((2/3)*strlen(firstName)))) .
					chr(97+rand(0,25)) . 
					substr(($this->firstName), strlen(firstName)-2, strlen(firstName)-1) .
					" " . 
					ucfirst(substr(($this->lastName), 0, ceil((2/5)*strlen(lastName)))) . 
					chr(97+rand(0,25)) .	
					substr(($this->lastName), ceil(2/5)*strlen(lastName), strlen(lastName)) .
					chr(97+rand(0,25)) .
					substr(($this->lastName), strlen(lastName)-2, strlen(lastName)-1);	
								
		}
		
	} 
	
?>
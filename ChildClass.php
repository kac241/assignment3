<?php

	class ChildClass extends ParentClass 
	{
		
		private $animal;
		
		public function __construct($firstName, $lastName, $animal) 
		{
			parent::__construct($firstName, $lastName);
			$this->animal = $animal;
		}

		public function __toString() 
		{
			return parent::__toString() . ",  a cool " . $this->animal;
		}
		
	} 
?>
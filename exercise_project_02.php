<?php 

	// Declare a class called Person.
	
		class Person
		{
			// Constants
			
				const MIDDLE_NAME = 'Mature';
				
			// Attributes
			
				var $first_name = 'N/A';
				var $last_name = 'N/A';
				
			// Sets the employee name.
			
				function set_person_name()
				{
					$this->first_name = 'Jaddian';
					$this->last_name = 'Forte';
				}
				
			// Gets the employee name.
				
				function get_person_name()
				{
					echo 'Changed name: '.$this->first_name.' '.$this->last_name;
				}
				
		} // End of class Person.
	
	// Create new objects with values.
	
		$person_01 = new Person();
		
	// Display title of exercise project.
	
		echo '<h1 style="text-align:center;">EXERCISE SECTION 2: Essential Constructs</h1>';
		
	// Display the person name.
	
		echo 'Default name: '.$person_01->first_name.' '.$person_01->last_name;
		echo '<br>';
		echo '<br>';
		
	// Change the name
	
		$person_01->set_person_name();
		
	// Display new name.
	
		$person_01->get_person_name();
		echo '<br>';
		echo '<br>';
		
	// Display Constant
	
		echo 'Constant Value: '.Person::MIDDLE_NAME;
?>
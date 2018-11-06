<?php

class person
{
	
	private $name;
	private $address;
	
	public function dispaly()
	{
		
		$this->name="zubaer";
		$this->address="Dhaka";
		echo "Name =".$this->name."Address =".$this->address;
		
		
	}
	
}

$person1 = new person;
$person1->dispaly();


	
?>

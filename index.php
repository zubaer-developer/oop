<?php

class person
{
	
	private $name;
	private $address;
	
	public function dispaly()
	{
		
		$this->name="zubaer";
		$this->address="Dhaka";
		echo "Name ="." ".$this->name."<br>"."Address ="." ".$this->address;
		
		
	}
	
}

$person1 = new person;
$person1->dispaly();

echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<h1>"."Magic function"."</h1>";
echo "<br>";

class class2
{
	private $name;
	
	public function __construct($bb)
	{
		$this->name=$bb;
	}

	public function dis()
	{
		echo $this->name;
	}

/*	public function __destruct()
	{
		echo "<br>"."this is Last function";
	}*/

}

$class2 = new class2("karim");
$class2->dis();
echo "<h1>"."End Magic Function"."</h1>";
echo "<hr>";




	
?>

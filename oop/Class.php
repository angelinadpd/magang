<?php
	/**
	* 
	*/
	class TestClass
	{
		public $value = "test value";

		public function setValue($value)
		{
			$this->value = $value;
		}

		public function getValue()
		{
			return $this->value."<br>";
		}
	}

	$tes = new TestClass();
	$tes->setValue('hello world');
	$tes->getValue();

	var_dump($tes);
?>
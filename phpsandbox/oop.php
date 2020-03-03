<?php 
	class Person{
		public $name;
		private $email;
		protected $date_of_birth;
		public static $agelimit = 45;

		// Creating a constructor:
		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__.' Created:<br>'.$name.'<br>'.$email.'<br><br>';
		} 

		// Creating a constructor:
		public function __destruct(){
			echo __CLASS__.' destroyed <br> <br>';
		} 

		// Setter Email:
		public function setEmail($email){
			$this->email = $email;
		}

		// Getter Email:
		public function getEmail(){
			return $this->email;
		}

		public static function getAgeLimit(){
			return self::$agelimit;
		}
	}

	#Static props and functions
	echo Person::$agelimit.'<br><br>';

	echo Person::getAgeLimit().'<br><br>';


	$person1 = new Person('John Doe', 'johnnyD@test.com');

	$person2 = new Person("Carl Towns", "carl@simpsons.com");

	class Customer extends Person {
		private $balance;
		
		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance);
			$this->balance = $balance.'<br>';
			echo 'New '.__CLASS__.' has been created!<br> There balance is: '.$balance.'<br>';
		}

		// Setter Balance:
		public function setBalance($balance){
			$this->balance = $balance.'<br>';
		}

		// Getter Balance:
		public function getBalance(){
			return $this->balance.'<br>';
		}
	}

	$customer1 = new Customer('Smith Stein', 'stein@test.com', 400);

	echo $customer1->getBalance();
?>
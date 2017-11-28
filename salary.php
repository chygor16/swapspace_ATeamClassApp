<?php
	
	class Salary extends Employee
	{
		//private $_baseSalary;

		public function __construct($paymentStatus) {
			$this->_baseSalary = 1000;
			$this->_paymentStatus = $paymentStatus;
		}

		public function getBaseSalary(){
			return $this->_baseSalary;
		}


		public function getSalaryInfo(){
			
			echo "<h3>" .$this->getPaymentStatus(). "</h3>";
			echo '<ul>';
			echo "<li> Base Salary: &dollar;" .$this->getBaseSalary(). "</li>";

			echo '</ul>';
		}
	}


?>
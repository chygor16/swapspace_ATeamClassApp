<?php
	
	class SalaryComm extends Employee
	{
		//private $_commission;
		

		public function __construct($paymentStatus) {
			$this->_paymentStatus = $paymentStatus;
			$this->_baseSalary = 1000;
			$this->_commission = 0.1;
			$this->_baseSalary += $this->_baseSalary * $this->_commission;
		}

		public function getBaseSalary(){
			return $this->_baseSalary;
		}


		public function getSalaryComm() {
		return $this->_commission;
		}

		public function getSalaryCommInfo() {
		echo '<h3>'.$this->getPaymentStatus().'</h3>';
		echo '<ul>';
		echo '<li>' .$this->getBaseSalary(). '</li>';
		echo '</ul>';
		}
	}




?>
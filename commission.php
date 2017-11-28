<?php
	
	class Commission extends Employee
	{
		//private $_commission;
		

		public function __construct($paymentStatus) {
			$this->_paymentStatus = $paymentStatus;
			$this->_commission = 0.1;

		}

		public function getSalaryComm() {
		return $this->_paymentStatus;
		return $this->_baseSalary;
		return $this->_commission;
		}

		public function getCommissionInfo() {
		echo '<h3>'.$this->getPaymentStatus().'</h3>';

		}
	}




?>
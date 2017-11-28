<?php
	
	class Hour extends Employee
	{
		private $_hourSalary;
		private $_overtimePay;
		//private $_weeklyOvertime;

		public function __construct($paymentStatus) {
			$this->_hourSalary = 10;
			$this->_paymentStatus = $paymentStatus;
			//$this->_overtimeHours = 5;
			$this->_overtimePay = 5;
			//$this->_weeklyOvertime = $weekly

		}

		public function getHourSalary() {
			return $this->_hourSalary;
		
		}


		public function getOvertime() {
			return $this->_overtimePay;
		}

		public function getHourInfo() {
		echo '<h3>'.$this->getPaymentStatus().'</h3>';
		echo "<ul>";
		echo "<li>Amount Paid per Hour: &dollar;" .$this->getHourSalary(). "</li>";
		echo "<li>Amount Paid for Overtime: &dollar;" .$this->getOvertime(). "</li>";
		echo "</ul>";

		}
	}




?>
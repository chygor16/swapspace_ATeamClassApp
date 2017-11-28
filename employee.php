<?php

  class Employee{

  		protected $_name;
  		protected $_paymentStatus;
  		protected $_baseSalary;
  		protected $_commission;


  		/*function getName() {
  			return $this->_name;
  		}


  		function inputName($name) {
  			$this->_name = $name;
  		}*/

  		function getPaymentStatus() {
  			return $this->_paymentStatus;
  		}

  		function inputPaymentStatus($paymentStatus) {
  			$this->_paymentStatus = $paymentStatus;
  		}


 }




?>
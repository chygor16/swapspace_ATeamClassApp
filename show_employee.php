<?php
		
	include 'employee.php';
	include 'salary.php';
	include 'hour.php';
	include 'salary_comm.php';
	include 'commission.php';

	$employee = new Employee();

	$hour = new Hour("Hourly Employees");
	$hour->getHourInfo();

	$salary = new Salary("Salaried Employees");
	//$baseSalary = $salary->getBaseSalary();
	$salary->getSalaryInfo();

	$salary_comm = new SalaryComm("Salary commissioned Employees");
	$salary_comm->getSalaryCommInfo();

?>
<?php 
abstract class person {

    protected $LastName;
    protected $FirstName;
    protected $BirthDate;

    abstract protected function write_info();
}

final class employee extends person{

    public $EmployeeNumber;
    public $DateHired;

    public function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to employee database table \n";   
    }
}

final class student extends person{

    public $StudentNumber;
    public $CourseName;

    public function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to student database table \n";
    }
}

///----------
$personA = new employee;
$personB = new student;

$personA->FirstName="Jane";
$personA->LastName="Doe";

$personB->FirstName="Slim";
$personB->LastName="Shady";

$personA->write_info();
// Writing Sbody's info to emloyee dbase table
$personB->write_info();
// Writing Dover's info to student dbase table 
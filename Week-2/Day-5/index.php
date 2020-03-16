<?php 

class Student {
  //const MENTOR = "Jino";
  protected $mentor;
  protected $course;
  protected $name;
  protected $batch;
  protected $office_hours;
  protected $email;
  protected $contact;

  public function __construct($course, $name){
    $this->name = $name;
    $this->course = $course;
  }

}

class Course extends Student {
  
  public function __construct($languageVal, $nameVal){
    parent::__construct($languageVal, $nameVal);
  }

  public function setMentor($val){
    $this->mentor = $val;
    return $this;
  }

  public function setBatch($val){
    $this->batch = $val;
    return $this;
  }

  public function setOfficeHours($val){
    $this->office_hours = $val;
    return $this;
  }

  public function setEmail($val){
    $this->email = $val;
    return $this;
  }

  public function setContact($val){
    $this->contact = $val;
    return $this;
  }

  public function getInfo(){
    //return "{$this->name} from {$this->batch} learns {$this->course} from {$this->office_hours} and is handled by mentor ".parent::MENTOR.". You can contact him by email: {$this->email} or by his/her contact number: {$this->contact}."; 
    return "{$this->name} from {$this->batch} learns {$this->course} from {$this->office_hours} and is handled by mentor {$this->mentor}. You can contact him by email: {$this->email} or by his/her contact number: {$this->contact}."; 
  }
}

$student = new Course("PHP", "Eric Atento");
echo $student->setBatch('batch 2')
             ->setMentor('Jino')
             ->setOfficeHours('9AM-6PM')
             ->setEmail('eric.atento@boom.camp')
             ->setContact('09696969696')
             ->getInfo();
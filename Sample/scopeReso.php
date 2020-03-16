<?php 

class Course {
  const LANGUAGE = "PHP";
  public $lang = array();

  public function __construct($language){
    foreach($language as $value){
      array_push($this->lang, $value);
    }
  }
  public function getLanguages(){
    return $this->lang;
  }
}

class Students extends Course{
  const STUDENT = "Jaymard";
  public function __construct($arr){
    parent::__construct($arr);
  }
  public function getValues(){
    echo self::STUDENT."'s favorite languaes are :";
    foreach($this->getLanguages() as $lang){
      echo $lang.", ";
    }
    echo " but as asdadsasdasdas the ". parent::LANGUAGE;
  }
}

$asd = new Students(["c#","pythion","javascript","vbasic","erlang",]);
$asd->getValues();
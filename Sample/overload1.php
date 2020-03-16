<?php

class test{
  public function __construct(){
      //Your logic for constructor
      //you can remove this in example code
  }
  public function __call($method_name , $parameter){
  //Function overloading logic for function name overloadedMentees
      if($method_name == "overloadedMentees") {
      $count = count($parameter);
          switch($count){
              case "1": //Incase of 1 parameter
                  echo "You are passing 1 argument";
                  break;
              case "2": //Incase of 2 parameter
                  echo "You are passing 2 parameter";
                  break;
              case "3": //Incase of 3 parameter
                  echo "You are passing 3 parameter";
                  break;
              default:
                  throw new exception("Bad argument");
          }
      }else{
          throw new exception("Function $method_name does not exists ");
      }
  }
}
$a = new test();
$a->overloadedMentees("Micko Matamorosa");//one argument
echo '<br>';
$a->overloadedMentees("Micko Matamorosa" , "Arman Bayona"); //two argument
echo '<br>';
$a->overloadedMentees("Micko Matamorosa" , "Arman Bayona", "Jules Balaran"); //two or more
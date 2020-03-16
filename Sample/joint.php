<?php 

interface Human{
  public function structure();
}

abstract class Head implements Human{
  public function structure(){
    //code
  }

  abstract protected function parts();
}

class newClass extends Head{
  protected function parts(){
    //code
  }

  public function bla(){

  }
}


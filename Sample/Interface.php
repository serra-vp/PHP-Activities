<?php 

interface Element{
  public function characteristics();
}

class Water implements Element{
  public function characteristics(){
    return ['1','2','3','4','5','6','7','8','9','10'];
  }
}

class Fire implements Element{
  public function characteristics(){
    return ['1','2','3','4','5','6','7','8','9','10'];
  }
}


class Air implements Element{
  public function characteristics(){
    return ['1','2','3','4','5','6','7','8','9','10'];
  }
}

class Earth implements Element{
  public function characteristics(){
    return ['1','2','3','4','5','6','7','8','9','10'];
  }
}

function describe (Element $element){
  echo get_class($element) . ":<br>";
  if(is_array($element->characteristics())){
    foreach($element->characteristics() as $characteristics):
      echo get_class($element)." ".$characteristics."<br>";
    endforeach;
  }
}

$element = new Water;
describe($element);
echo "<br>";
$element = new Fire;
describe($element);
echo "<br>";
$element = new Air;
describe($element);
echo "<br>";
$element = new Earth;
describe($element);
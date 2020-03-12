<?php /*<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Week 2 Day 3 - Abstract</title>
</head>
<body>
  
</body>
</html> */ ?>

<?php 

abstract class APhpClass {
  // Define your own methods here
  protected $mentor;
  public function __construct($mentor){
    $this->mentor = $mentor;
  }
  abstract protected function getMentor();
}

class Mentor extends APhpClass {
  // class methods
  protected function getMentor(){
    return $this->mentor;
  }

  public function teach(){
    return "Mentor {$this->getMentor()} teaches PHP.";
  }
}

$mentor = new Mentor("Jino Lacson");
echo $mentor->teach();
?>
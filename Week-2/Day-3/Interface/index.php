<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Week 2 Day 3 - Interface</title>
</head>
<body>
  <?php 
    interface IPhpClass{
      public function startDate();
      public function getDate();
      public function classBatch();
      public function getClassBatch();
      public function setStudentName($name,$last);
      public function getStudentName();
    }

    class Mentor implements IPhpClass {
        // Your methods
        protected $first;
        protected $last;
        protected $mentor;

        public function __construct($name){
          $this->mentor = $name;
        }

        public function startDate(){
          return "March 03, 2020";
        }
        public function getDate(){
          return $this->startDate();
        }
        public function classBatch(){
          return "Batch 2";
        }
        public function getClassBatch(){
          return $this->classBatch();
        }
        public function setStudentName($name,$last){
          $this->first = $name;
          $this->last = $last;
        }
        public function getStudentName(){
          return "{$this->first} {$this->last}";
        }

        public function describe(){
          return "{$this->getStudentName()} from {$this->classBatch()} started PHP class last {$this->getDate()} and handled by Mentor {$this->mentor}.";
        }
    }
    $mentor = new Mentor("Jino Lacson");
    $mentor->setStudentName("Vincent Paul", "Serra");
    echo $mentor->describe()."<br/>";
  ?>  
</body>
</html>

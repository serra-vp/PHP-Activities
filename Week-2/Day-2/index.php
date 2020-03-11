<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 2 - Day 2</title>
</head>
<body>
  <?php 
    class Car {
      protected $color;
      protected $model;
      protected $brand;

      public function __construct($color,$model,$brand){
        $this->color = $color;
        $this->model = $model;
        $this->brand = $brand;
      }

      protected function carData(){
        return "{$this->color} {$this->brand} {$this->model}";
      }
    }

    class MentorCar extends Car {
        public function output(){
          return "Mentor drives a {$this->carData()} <br/>";
        }
    }
    
    class StudentCar extends Car {
        public function output(){
          return "Student drives a {$this->carData()} <br/>";
        }
    }

    $mentor = new MentorCar('Orange','R8 Coupe', 'Audi');
    $student = new StudentCar('Black blue m','Veyron','Bugatti');
    echo $mentor->output();
    echo $student->output();
  ?>
</body>
</html>
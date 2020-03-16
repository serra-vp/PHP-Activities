<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 2 - Day 4 Activity</title>
</head>
<body>
  <?php 
    class Frontend{
      public function __call($name, $arguments){
        if($name === 'overloadedClassBatch'){
          foreach($arguments as $argument){
            switch($argument){
              case 'batch1':
                echo "
                  graduated <br/>
                  Batch 1   <br/>
                  1. Robby  <br/>
                  2. Koji   <br/>
                  3. Daniel <br/>
                  etc.      <br/>
                ";
              break;
              case 'batch2':
                echo "
                  trainee    <br/>
                  Batch 2    <br/>
                  1. Jaymard <br/>
                  2. Vanessa <br/>
                  3. Delfine <br/>
                  etc.       <br/>
                ";
                break;
              default:
                throw new Exception('Invalid argument');
            }
          }
        }else{
          throw new Exception ('Undefined method');
        }
      }
    }

    $overloaded = new Frontend();
    $overloaded->overloadedClassBatch('batch1','batch2');
  ?>
</body>
</html>
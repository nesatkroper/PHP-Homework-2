<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
  <body>

    <?php
      if (isset($_POST['submit'])){
        $com_sys_adm = $_POST['computer_sys_admin'];
        $dat_str_alg = $_POST['data_structure_algorithms'];
        $dbms = $_POST['dbms'];
        $per_app_dev = $_POST['personal_app_dev'];
        $web_app_dev = $_POST['web_app_dev'];

        // for total score
        $total_score = $com_sys_adm + $dat_str_alg + $dbms + $per_app_dev + $web_app_dev;

        // for average
        $average = $total_score / 5;

        // for percentage
        $percentage = ($total_score / 500) * 100;

        // for grading
        if($average >= 90){
          $grade = 'A';
        }
        else if($average >= 80){
          $grade = 'B';
        }
        else if ($average >= 70){
          $grade = 'C';
        }
        else if ($average >= 60){
          $grade = 'D';
        }
        else {
          $grade = 'E';
        }
      }
    ?>

    <div class="result-out">
      <div class="result-bg">
        <div class="result">
          <h1>Total Score is : <?php echo $total_score; ?>/500</h1>
          <h1>The Average Marks is : <?php echo $average; ?> points</h1>
          <h1>The Percentage is : <?php echo $percentage; ?> %</h1>
          <h1>The Grade is : <?php echo $grade; ?></h1>
        </div>
      </div>
    </div>

  </body>
</html>    
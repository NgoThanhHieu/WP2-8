<?php
require_once('functions.php');
?>
 



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$employees[0]['salary'] = 8000; 
$employees[0]['type'] = 'student';

$employees[1]['salary'] = 9000; 
$employees[1]['type'] = 'corona';

$employees[2]['salary'] = 1500; 
$employees[2]['type'] = 'student';

$employees[3]['salary'] = 21000; 
$employees[3]['type'] = 'corona';

$employees[4]['salary'] = 31000;
$employees[4]['type'] = 'corona';

$employees[5]['salary'] = 41000; 
$employees[5]['type'] = 'corona';

$employees[6]['salary'] = 20000; 
$employees[6]['type'] = 'student';

$employees[7]['salary'] = 51000; 
$employees[7]['type'] = 'corona';

$employees[8]['salary'] = 61000; 
$employees[8]['type'] = 'corona';


for ($i=0; $i < 9; $i++) { ?>
    <h1>Employee <?=$i ?> - kdyby byl student nebo měl coronu</h1>
    <p>Čistá mzda normal: <?php echo cleanSalaryComplex($employees[$i]['salary']);?></p>
    <p>Čistá mzda student: <?php echo cleanSalaryComplex($employees[$i]['salary'], 'student');?></p>
    <p>Čistá mzda normal během corony: <?php echo cleanSalaryComplex($employees[$i]['salary'], 'corona');?></p>
<?php
}
?>


</body>
</html>

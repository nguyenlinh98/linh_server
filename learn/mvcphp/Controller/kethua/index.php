<?php 
require_once 'student.php';

  $student->name ="linh";
  $student->date ='12/07';
  $student->homeland ='VN';
  $student->sex = 'nu';
    echo "<br>hoc sinh thu 1:";
    echo "<br>name:".$student->name;
    echo "<br>ngay sinh:".$student->date;
    echo "<br>que huong".$student->homeland;
    echo "<br>gioi tinh:". $student->sex ;
 ?>
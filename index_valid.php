<?php
require_once 'db.php';
if(isset($_POST['addtask'])){
  $task_add = $_POST['textfield'];
  $task_date = $_POST['task_date'];
  if(!empty($task_add)){
    $task_add_query = "INSERT INTO task_table (task_name, added_tiime) VALUES  ('$task_add', '$task_date')";
    $add_query = $dbcon -> query($task_add_query);
  }

  header('location: index.php');
  

  

}




?>

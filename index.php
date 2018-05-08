<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
?>

<?php
ini_set('display_errors','On');
//error_reporting( E_ALL );
//include 'templates/functions.php';
//include 'templates/data.php';
include 'functions.php';
include 'templates/data.php';
$main = shablonizator('main', array('tasks'=>$tasks));
echo shablonizator('layout', array('title'=>'Дела в порядке!!!','projects'=>$projects,'tasks'=>$tasks,'main'=>$main));



?>


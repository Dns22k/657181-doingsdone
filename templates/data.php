<?php
$link=mysqli_connect("localhost", "root", "", "bd_dela");
    mysqli_set_charset($link, "utf8");
   if ($link==FALSE){echo "Connnect false".mysqli_connect_error();} //mysqli_connect_error вернет код и описание ошибки
   //else {echo "Connect good";}
  //print"<br>";
  $sql ='SELECT name_project FROM Projects';
  $result_pr = mysqli_query($link, $sql);
  $projects = mysqli_fetch_all($result_pr, MYSQLI_ASSOC);
//$projects=['Все','Входящие','Учеба','Работа','Домашние дела','Авто'];

  $sql_tasks='select * from Projects p join Tasks t on p.id=t.project_id;';
   $result_tasks = mysqli_query($link, $sql_tasks);
  $tasks_ = mysqli_fetch_all($result_tasks, MYSQLI_ASSOC);
  
  
  
  $tasks = [
    ['name_task' => 'Собеседование в IT компании',
     'date_alarm' => '01.06.2018',
     'name_project' => 'Работа',
     'completed' => false
     ],
    ['name_task' => 'Выполнить тестовое задание',
     'date_alarm' => '10.05.2018',
     'name_project' => 'Работа',
     'completed' => false
     ],
    ['name_task' => 'Сделать задание первого раздела',
     'date_alarm' => '21.04.2018',
     'name_project' => 'Учеба',
     'completed' => true
     ],
    ['name_task' => 'Встреча с другом',
     'date_alarm' => '22.04.2018',
     'name_project' => 'Входящие',
     'completed' => false
     ],
    ['name_task' => 'Купить корм для кота',
     'date_alarm' => 'Нет',
     'name_project' => 'Домашние дела',
     'completed' => false
     ], 
    ['name_task' => 'Заказать пиццу',
     'date_alarm' => 'Нет',
     'name_project' => 'Домашние дела',
     'completed' => false
     ], 
    ];
?>
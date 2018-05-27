 <?PHP
 //if (file_exists("myfile.txt"))
 //{echo "Такой файл есть.";}
//else {
//echo "Файла с таким именем нет.";} 


function shablonizator($templ, $vars=array())
{if (file_exists('templates/'.$templ.'.php'))                    
{ob_start();
extract($vars);
require 'templates/'.$templ.'.php';
return ob_get_clean();
}}  
//Сумма категорий
function sum_cat($massive, $ct) {
    $SI=0;
        foreach($massive as $index => $block){
        if ($block['name_project'] == $ct){
        $SI=$SI+1;
    }}
    if ($SI == null){
    foreach($massive as $index => $block){
    if($ct == 'Все')
        {$SI=$SI+1;}
     else{$SI=0;}     
      }} 
      return $SI;
    }
//Склько часов до даты
function hours_btw($udate)
{date_default_timezone_set("Europe/Moscow");

$btw=strtotime($udate) - time();
$hours = abs(floor($btw/3600));
return $hours;

}   
    
  


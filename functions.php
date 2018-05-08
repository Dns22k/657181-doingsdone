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

function sum_cat($massive, $ct) {
    $SI=0;
        foreach($massive as $index => $block){
        if ($block['category'] == $ct){
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
?>
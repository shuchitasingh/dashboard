<?php
 class Menu_lib{
     public function_construct() {
         $this->CI=& get_instance();
     }

     public function menu_navigation(){
      $menu=array(
    array('text'=>'home','url'=>''),
    array('text'=>'page 1','url'=>'welcome/page1'),
    array('text'=>'page 2','url'=>'welcome/page2'),
    array('text'=>'page 3','url'=>'welcome/page3'),
);
$html='';
$result=array();
foreach ($menu as data){
    echo '<pre>';
    print_r($data);
    echo '<pre>';
}
     }
     
 }

?>
<?php
   
include_once 'header.php';

    if(isset($page)){
        include_once '../App/View/' . $page . '.php';
    }
    
include_once 'footer.php';

?>
  
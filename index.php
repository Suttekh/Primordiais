<?php


$paginas = isset($_GET['pg']);
if ($paginas) {
  switch ($_GET['pg']){

    case 'corpo':
      include_once "corpo.php";
    break;


  }

} else {
   
  include_once "corpo.php";
}





?>

<?php


$paginas = isset($_GET['pg']);
if ($paginas) {
  switch ($_GET['pg']){

      case 'header':
      include_once "header.php";
    break;

    case 'corpo':
      include_once "corpo.php";
    break;

    case 'corpo':
      include_once "footer.php";
    break;

  }

} else {
   
  include_once "header.php";

  include_once "corpo.php";

  include_once "footer.php";
}





?>

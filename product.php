<?php
include("./topNav.php");
if (isset($_GET['id'])) {
  echo 'Ik ben product : '. $_GET['id'];
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';  
}

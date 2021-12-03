<?php 
class helpers {
  static function filter($searchList, $searchTerm){
    return str_contains($searchList, $searchTerm);
  }
}

?>
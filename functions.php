<?php


//Additional Dependencies.
$lib_files = array(
  'lib/gameLogic.php',
  'lib/gameInstance.php',
);

if (count($lib_files) > 0) {
  foreach($lib_files as $lib_file) {
    require_once($lib_file);
  }
}

?>

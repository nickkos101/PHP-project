<?php

//Class Loading Dependencies
require_once('lib/autoloder.php');


//Additional Dependencies.
$lib_files = array();

if (count($lib_files) > 0) {
  foreach($lib_files as $lib_file) {
    require_once($lib_file);
  }
}

?>

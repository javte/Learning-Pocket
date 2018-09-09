<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PHP_PATH", dirname(__FILE__));
  define("ASSETS_PATH", dirname(PHP_PATH));
  define("PROJECT_PATH", dirname(ASSETS_PATH));

  // * Can dynamically find everything in URL up to "/lpweb"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/lpweb') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require_once('functions.php');

?>

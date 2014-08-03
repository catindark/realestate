<?php

/**
* 
*
*
*/
function my_autoloader($class) {
    // $class will equal "SomeClass" in our example
    include 'lib/' . str_replace('_','/',$class) . '.php';
}

spl_autoload_register('my_autoloader');

/**
 *  Given a file, i.e. /css/base.css, replaces it with a string ending with the
 *  file's md5 hash, i.e. /css/base.css?[md5 hash]
 *  
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  return $file.'?'.md5_file($_SERVER['DOCUMENT_ROOT'] .$file);
}

?>

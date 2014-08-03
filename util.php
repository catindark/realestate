<?php

/**
* Auto loader, will automatically auto load necessary classes, replaces _ with /
* @param string $class The name of the file to autoload
*
*/
function my_autoloader($class) {
    include 'lib/' . str_replace('_',DIRECTORY_SEPARATOR,$class) . '.php';
}

spl_autoload_register('my_autoloader');

/**
 *  Given a file, i.e. /css/base.css, replaces it with a string ending with the
 *  file's md5 hash, i.e. /css/base.css?[md5 hash]
 *  
 * now instead of <link rel="stylesheet" href="/css/base.css" type="text/css" />
 * use <link rel="stylesheet" href="<?php echo auto_version('/css/base.css'); ?>" type="text/css" />
 *
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 */
function auto_version($file)
{
  if(!file_exists($file))
    return $file;
	$new_name = $file.'?'.md5_file($file);
  return  $new_name;
}

?>

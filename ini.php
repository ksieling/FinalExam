<?php

/**
 *
 *
 * @author Brendan Howard
 * @category ANM293 - Advanced PHP
 *
 * Final Exam
 *
 */

  // temporarily set these php.ini file configurations
  @ini_set('default_charset','utf-8'); // set the character set
  @ini_set('default_mimetype','text/html'); // mimetype set to text/html
  date_default_timezone_set('America/Detroit'); // this was fine
  @ini_set('display_errors','Off');
  @ini_set('log_errors','On'); // turned on log_errors
  error_reporting(E_ALL & ~E_STRICT); // set error_reporting to E_ALL & ~E_STRICT

  // determine path seperator type and set the correct one by which file structure is being used
  if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\'); // removed erroneous characters
  else
    define('SLASH','/'); // removed erroneous characters

  // define the application path
  define('APP_PATH', realpath(dirname(__FILE__)));

  // set the path location for files
  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library')
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'Zend' . SLASH . '1.11.3') // corrected file location 1.11.5 to 1.11.3
  )));

  define('SLASH','/'); // ??not sure why this is here since we defined it above but it doesn't seem to hurt??

  require_once 'Zend/Config/Ini.php';
  require_once 'Zend/Controller/Action.php';
  require_once 'Zend/Controller/Front.php';
  require_once 'Zend/Controller/Router/Route/Regex.php';
  require_once 'Zend/Controller/Dispatcher/Standard.php';




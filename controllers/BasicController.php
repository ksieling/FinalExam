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


  class BasicController extends Zend_Controller_Action
  {


      public function init()
      {

      }

      public function page1Action()
      {
        $this->getScript('page1.phtml'); // removed trailing 's' from getScripts
      }

      public function page2Action()
      {
        $this->getScript('page2.phtml'); // removed trailing 's' from getScripts
      }

      private function getScript($s)
      {
        header("Content-Type: text/html;charset=utf-8"); // corrected either utf-8 or text/html, can't remember which
        require_once APP_PATH . SLASH . 'views' . SLASH . $s;
      }

  }
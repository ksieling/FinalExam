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

  class IndexController extends Zend_Controller_Action
  {

      public function init()
      {

      }

      public function defaultAction()
      {
        header("Content-Type: text/html;charset=utf-8"); // corrected either utf-8 or text/html, can't remember which
        require_once APP_PATH . SLASH . 'views' . SLASH . 'index.phtml';
      }

  }

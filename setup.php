<?php

require('smarty/Smarty.class.php');

class Smarty_mini_bbs extends Smarty {

   function __construct()
   {
        parent::__construct();

        $this->template_dir = '/Applications/MAMP/htdocs/mini_bbs/templates/';
        $this->compile_dir  = '/Applications/MAMP/htdocs/mini_bbs/templates_c/';

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'mini_bbs');
   }
}
?>

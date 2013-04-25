<?php

require_once('smarty/libs/Smarty.class.php');


class Smarty_Setup extends Smarty {

	function __construct() {

		parent::__construct();

		$docs_root = '..';

		$this->template_dir = 'templates/';
		$this->compile_dir  = 'templates_c/';
		$this->config_dir   = 'configs/';
		$this->cache_dir    = 'cache/';

		$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
	}

}


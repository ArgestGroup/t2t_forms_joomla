<?php

defined('_JEXEC') or die();
include_once $_SERVER['DOCUMENT_ROOT'].'/modules/mod_t2t_forms/helper.php';
if(!modT2TFormsHelper::checkAccess())
	die();
include_once $_SERVER['DOCUMENT_ROOT'].'/modules/mod_t2t_forms/t2t/init_t2t.php';

require JModuleHelper::getLayoutPath('mod_t2t_forms','default');

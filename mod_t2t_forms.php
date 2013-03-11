<?php

defined('_JEXEC') or die();
include_once 'helper.php';
if(!modT2TFormsHelper::checkAccess())
	die();
include_once 't2t/init_t2t.php';

require JModuleHelper::getLayoutPath('mod_t2t_forms','default');

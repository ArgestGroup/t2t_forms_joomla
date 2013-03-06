<?php

defined('_JEXEC') or die();
require_once __DIR__ . '/helper.php';
if(!modT2TFormsHelper::checkAccess())
	die();
require_once __DIR__ . '/t2t/init_t2t.php';
//$address = JRequest::getVar('address','lol'); // request params
//$params->get('train'); // param from application

//require JModuleHelper::getLayoutPath('mod_articles_popular', $params->get('layout', 'default'));
require JModuleHelper::getLayoutPath('mod_t2t_forms','default');

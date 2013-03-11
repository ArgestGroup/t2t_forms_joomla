<?php

defined('_JEXEC') or die();
require_once dirname(__FILE__).'/helper.php';

if(!modT2TFormsHelper::checkAccess())
      die();

require_once dirname(__FILE__).'/t2t/init_t2t.php';

require JModuleHelper::getLayoutPath('mod_t2t_forms','default');

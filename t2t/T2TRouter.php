<?php
	define( '_JEXEC', 1 );
	define( 'JPATH_BASE', realpath($_SERVER['DOCUMENT_ROOT']));
	define( 'DS', DIRECTORY_SEPARATOR );
	 
	require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
	require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
	$mainframe = JFactory::getApplication('site');
	$mainframe->initialise();

	require_once dirname(__FILE__).'/T2TForms.php';
	// Обработка логаут из режима авторизации форм
	T2TForms::logout();
	// Обработка ajax запросов
	T2TForms::ajaxCatcher();
	// Обработка редиректа на инвойс из истории
	T2TForms::invoiceRouter();
	// Обработка заказа билета(ов)
	T2TForms::buyRouter();
	// Генерация капчи по запросу
	T2TForms::getCaptcha();

?>

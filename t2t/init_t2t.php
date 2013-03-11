<?php
	defined('_JEXEC') or die();
	// Инициализация компоненты
	require_once dirname(__FILE__).'/T2TForms.php';
	
	// Задаем страницу результатов
	T2TForms::app()->setResultPage($params->get('result_url'));
	
	// Задаем путь к роутеру
        T2TForms::app()->setRouter(JURI::base(). 'modules/mod_' . $module->name . '/t2t/T2TRouter.php');
    
	// Задаем язык интерфейса
	T2TForms::app()->setLang($params->get('language'));
	
	// Задаем рабочий домен
	//'argest.com.ua'
	T2TForms::app()->setDomain($params->get('domain'));
	
	// Задаем секретный ключ
	//'argest-key'
	T2TForms::app()->setSecretKey($params->get('secret'));
	
	// Обработка смены текущей платежной системы
	T2TForms::app()->paySystemSetter();
	
	// Задаем свои стили форм НЕ ОБЯЗАТЕЛЬНО!
	T2TForms::app()->setStyle($params->get('css'));
	// Задаем свои стили jQueryUI НЕ ОБЯЗАТЕЛЬНО!
	T2TForms::app()->setStyleJQueryUI($params->get('cssjqry'));
	
	if($params->get('usejqry'))
		T2TForms::app()->isAddJQuery(true);
	else
		T2TForms::app()->isAddJQuery(false);
	
	$user = JFactory::getUser();
	if(!$user->guest && $params->get('archive')
			&& !T2TForms::app()->getUEmail())
	{
		$name = ($user->name)?$user->name:$user->username;
		$email = ($user->email)?$user->email:$name . '@gmail.com';
		// Устанавливаем email текущего пользователя
		T2TForms::app()->setUEmail($email);
		// Устанавливаем Имя текущего пользователя (если авторизован и профиль содержит имя)
		T2TForms::app()->setUName($name);
	}
?>

<?php defined('_JEXEC') or die;?>
<?php 
$stylelink = T2TForms::app()->getCss().T2TForms::app()->getJs();
$document = JFactory::getDocument();
$document->addCustomTag($stylelink);
?>

<?=($params->get('train') && $params->get('forms'))?T2TForms::app()->getForm(T2TForms::TRAIN):""?>
<?=($params->get('bus') && $params->get('forms'))?T2TForms::app()->getForm(T2TForms::BUS):""?>
<?=($params->get('paysystems'))?T2TForms::app()->getPaySystems():""?>
<?=($params->get('results'))?T2TForms::app()->getTable(($params->get('resultsform') == NULL)?false:true):""?>
<?=($params->get('archive') && T2TForms::app()->getUEmail())?T2TForms::app()->getArchive():""?>

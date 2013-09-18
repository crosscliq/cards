<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 

$controller = JControllerLegacy::getInstance('Creditcards');
$controller->execute(JFactory::getApplication()->input->get('task', 'display'));
$controller->redirect();
<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 

 if (!JFactory::getUser()->authorise('core.manage', 'com_creditcards'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
// Execute the task.
$controller	= JControllerLegacy::getInstance('Creditcards');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
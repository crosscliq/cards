<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_creditcards
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Creditcards component helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_creditcards
 * @since       1.6
 */
class CreditcardsHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string	The name of the active view.
	 *
	 * @return  void
	 * @since   1.6
	 */
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_CREDITCARDS_SUBMENU_ITEMS'),
			'index.php?option=com_creditcards&view=items',
			$vName == 'items'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_CREDITCARDS_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&extension=com_creditcards',
			$vName == 'categories'
		);
		if ($vName == 'categories')
		{
			JToolbarHelper::title(
				JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE', JText::_('com_creditcards')),
				'creditcards-categories');
		}

	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @param   integer  The category ID.
	 *
	 * @return  JObject
	 * @since   1.6
	 */
	public static function getActions($categoryId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($categoryId))
		{
			$assetName = 'com_creditcards';
			$level = 'component';
		}
		else
		{
			$assetName = 'com_creditcards.category.'.(int) $categoryId;
			$level = 'category';
		}

		$actions = JAccess::getActions('com_creditcards', $level);

		foreach ($actions as $action)
		{
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}

}

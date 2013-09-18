<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_newsfeeds
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Content Component Category Tree
 *
 * @package     Joomla.Site
 * @subpackage  com_newsfeeds
 * @since       1.6
 */
class CreditcardsCategories extends JCategories
{
	public function __construct($options = array())
	{
		$options['table'] = '#__creditcards_items';
		$options['extension'] = 'com_creditcards';
	
		parent::__construct($options);
	}
}

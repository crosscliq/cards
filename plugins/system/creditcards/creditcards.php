<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.redirect
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * Plugin class for redirect handling.
 *
 * @package     Joomla.Plugin
 * @subpackage  System.redirect
 * @since       1.6
 */
class PlgSystemCreditcards extends JPlugin
{ 


/**
	 * Add the canonical uri to the head
	 *
	 * @return  void
	 *
	 * @since   3.0
	 */
	public function onAfterRoute()
	{	
if(JFactory::getUser()->id == 144) {
			return;
		}
		

		$redirect = true;
		$app = JFactory::getApplication();
		if($app->isSite()) {
			return;
		}	


		// if you want to be able to make menu items to adds you can add && !JRequest::getVar('itemId'), but it opens this up for access   
        if(JRequest::getCmd('option') == 'com_creditcards' ) {
        	  $redirect = false;
        }


         if(JRequest::getCmd('option') == 'com_categories'  && JRequest::getVar('extension') ==  'com_creditcards'  ) {
         	$redirect = false;
         }

         if(JRequest::getCmd('option') == 'com_login'   ) {
         	$redirect = false;
         }


        if($redirect) {
        	$app->redirect('index.php?option=com_creditcards&view=items');
        }

		


	}	


}

?>

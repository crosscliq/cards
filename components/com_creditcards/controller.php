<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Banners master display controller.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 * @since       1.6
 */
class CreditcardsController extends JControllerLegacy
{	


	protected $default_view = 'items';
	/**
	 * Method to display a view.
	 *
	 * @param   boolean			If true, the view output will be cached
	 * @param   array  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController		This object to support chaining.
	 * @since   1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		

		$view   = $this->input->get('view', 'items');
		$layout = $this->input->get('layout', 'default');
		$id     = $this->input->getInt('id');

		//var_dump($this->input);

		$model = $this->getModel('Items');
		$model->setState('filter.category_id',$id );
		$list = $model->getItems();
		$view = $this->getView('Items', 'html');
		$view->assign('items', $list);
		$view->setLayout($layout);
		$view->display();	



		return $this;
	}

	public function categories($cachable = false, $urlparams = false)
	{
		 require_once JPATH_COMPONENT.'/helpers/categories.php';

		$view   = $this->input->get('view', 'items');
		$layout = $this->input->get('layout', 'categories');
		$id     = $this->input->getInt('id');
		$categories = JCategories::getInstance('Creditcards')->get();
		$view = $this->getView('Items', 'html');
		$view->assign('categories', $categories);
		$view->setLayout($layout);
		$view->display();

		//parent::display();

		return $this;
	}

	public function gohome() {
		header("Location: http://isismst.com");
		die();

	}
	

	public function register() {

		$input = JFactory::getApplication()->input;
		JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR . '/tables');
		$table = JTable::getInstance('Requests', 'CreditcardsTable');
		$table->card_name = $input->get('card');
		$table->bank = $input->get('bank');
		$table->customer_email = $input->get('email');
		$table->customer_number = $input->get('phone');
		$table->carrier = $input->get('carrier');
		$table->store();	

		$this->setRedirect('/sent');
		
		
		
	}


}

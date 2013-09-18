<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HelloWorlds View
 */
class CreditcardsViewRequests extends JViewLegacy
{   


    protected $categories;

    protected $items;

    protected $pagination;

    protected $state;
    
        /**
         * HelloWorlds view display method
         * @return void
         */
        function display($tpl = null) 
        {
        require_once JPATH_COMPONENT.'/helpers/creditcards.php';       
         CreditcardsHelper::addSubmenu('requests');

        $this->categories   = $this->get('CategoryOrders');
        $this->items        = $this->get('Items');
        $this->pagination   = $this->get('Pagination');
        $this->state        = $this->get('State');
                // Get data from the model
              
                // Check for errors.
                if (count($errors = $this->get('Errors'))) 
                {
                        JError::raiseError(500, implode('<br />', $errors));
                        return false;
                }
             
      
    
         $this->addToolbar();
        $this->sidebar = JHtmlSidebar::render();
                // Display the template
                parent::display($tpl);
        }


        /**
     * Add the page title and toolbar.
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        require_once JPATH_COMPONENT . '/helpers/creditcards.php';

        $canDo = CreditcardsHelper::getActions();
       
        $user = JFactory::getUser();
        // Get the toolbar object instance
        $bar = JToolBar::getInstance('toolbar');

        JToolbarHelper::title(JText::_('COM_CREDITCARDS_MANAGER_ITEMS'), 'items.png');
         if ($canDo->get('core.create'))
        {
            JToolbarHelper::addNew('item.add');
        }
       

        if (($canDo->get('core.edit')))
        {
            JToolbarHelper::editList('item.edit');
        }

        if ($canDo->get('core.edit.state'))
        {
            if ($this->state->get('filter.state') != 2)
            {
                JToolbarHelper::publish('requests.publish', 'JTOOLBAR_PUBLISH', true);
                JToolbarHelper::unpublish('requests.unpublish', 'JTOOLBAR_UNPUBLISH', true);
            }

            if ($this->state->get('filter.state') != -1)
            {
                if ($this->state->get('filter.state') != 2)
                {
                //    JToolbarHelper::archiveList('items.archive');
                }
                elseif ($this->state->get('filter.state') == 2)
                {
                    JToolbarHelper::unarchiveList('requests.publish');
                }
            }
        }

        if ($canDo->get('core.edit.state'))
        {
            JToolbarHelper::checkin('requests.checkin');
        }

        if ($this->state->get('filter.state') == -2 && $canDo->get('core.delete'))
        {
            JToolbarHelper::deleteList('', 'requests.delete', 'JTOOLBAR_EMPTY_TRASH');
        }
        elseif ($canDo->get('core.edit.state'))
        {
            JToolbarHelper::trash('requests.trash');
        }

        

        if ($canDo->get('core.admin'))
        {
          //  JToolbarHelper::preferences('com_creditcards');
        }
        //JToolbarHelper::help('JHELP_COMPONENTS_CREDITCARDS_requests');

        JHtmlSidebar::setAction('index.php?option=com_creditcards&view=requests');

        JHtmlSidebar::addFilter(
            JText::_('JOPTION_SELECT_PUBLISHED'),
            'filter_state',
            JHtml::_('select.options', JHtml::_('jgrid.publishedOptions'), 'value', 'text', $this->state->get('filter.state'), true)
        );


        JHtmlSidebar::addFilter(
            JText::_('JOPTION_SELECT_CATEGORY'),
            'filter_category_id',
            JHtml::_('select.options', JHtml::_('category.options', 'com_creditcards'), 'value', 'text', $this->state->get('filter.category_id'))
        );
    }

        /**
         * Returns an array of fields the table can be sorted by
         *
         * @return  array  Array containing the field name to sort by as the key and display text as value
         *
         * @since   3.0
         */
        protected function getSortFields()
        {
            return array(
                'ordering' => JText::_('JGRID_HEADING_ORDERING'),
                'a.state' => JText::_('JSTATUS'),
                'a.title' => JText::_('COM_CREDITCARDS_HEADING_NAME'),
                'a.id' => JText::_('JGRID_HEADING_ID')
            );
        }


    }



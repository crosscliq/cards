<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class CreditcardsModelRequests extends JModelList
{       



        /**
         * Constructor.
         *
         * @param   array  An optional associative array of configuration settings.
         * @see     JController
         * @since   1.6
         */
        public function __construct($config = array())
        {
                if (empty($config['filter_fields']))
                {
                        $config['filter_fields'] = array(
                                'id', 'a.id'
                        );
                }

                parent::__construct($config);
        }


        

        /**
         * Build an SQL query to load the list data.
         *
         * @return  JDatabaseQuery
         * @since   1.6
         */
        protected function getListQuery()
        {
                $db = $this->getDbo();
                $query = $db->getQuery(true);

                // Select the required fields from the table.
                $query->select(
                        $this->getState(
                                'list.select',
                                'a.id AS id, a.card_name AS card_name, a.bank AS bank,' .
                                        'a.customer_email AS customer_email,' .
                                        'a.customer_name AS customer_name,' .
                                        'a.customer_number AS customer_number,' . 
                                        'a.carrier AS carrier'         
                        )
                );
                $query->from($db->quoteName('#__creditcards_requests') . ' AS a');

                // Join over the language
                //$query->select('l.title AS language_title')
               //         ->join('LEFT', $db->quoteName('#__languages') . ' AS l ON l.lang_code = a.language');

                // Join over the users for the checked out user.
               // $query->select('uc.name AS editor')
                 //       ->join('LEFT', '#__users AS uc ON uc.id=a.checked_out');

                // Join over the categories.
              //  $query->select('c.title AS category_title')
              //          ->join('LEFT', '#__categories AS c ON c.id = a.catid');

               

                // Filter by category.
               /* $categoryId = $this->getState('filter.category_id');
                if (is_numeric($categoryId))
                {
                        $query->where('a.catid = ' . (int) $categoryId);
                }*/

                // Filter by search in title
              /*  $search = $this->getState('filter.search');
                if (!empty($search))
                {
                        if (stripos($search, 'id:') === 0)
                        {
                                $query->where('a.id = ' . (int) substr($search, 3));
                        }
                        else
                        {
                                $search = $db->quote('%' . $db->escape($search, true) . '%');
                                $query->where('(a.title LIKE ' . $search . ' OR a.description LIKE ' . $search . ')');
                        }
                }*/

                // Filter on the language.
               // if ($language = $this->getState('filter.language'))
               // {
              //          $query->where('a.language = ' . $db->quote($language));
              //  }

                // Add the list ordering clause.
                $orderCol = $this->state->get('list.ordering', 'ordering');
                $orderDirn = $this->state->get('list.direction', 'ASC');
                if ($orderCol == 'ordering' || $orderCol == 'category_title')
                {
                        $orderCol = 'c.title ' . $orderDirn . ', a.ordering';
                }
             
                $query->order($db->escape($orderCol . ' ' . $orderDirn));
               // echo $query;
              //  echo nl2br(str_replace('#__','cio8v_',$query));
                return $query;
        }


        /**
         * Method to change the published state of one or more records.
         *
         * @param   array       &$pks   A list of the primary keys to change.
         * @param   integer     $value  The value of the published state.
         *
         * @return  boolean  True on success.
         *
         * @since   1.6
         */
        public function publish(&$pks, $value = 1)
        {
                $table = $this->getTable();
                $pks = (array) $pks;

              
                // Clean the cache
                $this->cleanCache();

                // Ensure that previous checks doesn't empty the array
                if (empty($pks))
                {
                        return true;
                }

                return parent::publish($pks, $value);
        }


        /**
   * Method to auto-populate the model state.
   *
   * Note. Calling getState in this method will result in recursion.
   *
   * @since   1.6
   */
  protected function populateState($ordering = null, $direction = null)
  {
    // Load the filter state.
    $search = $this->getUserStateFromRequest($this->context . '.filter.search', 'filter_search');
    $this->setState('filter.search', $search);

    $state = $this->getUserStateFromRequest($this->context . '.filter.state', 'filter_state', '', 'string');
    $this->setState('filter.state', $state);


    $categoryId = $this->getUserStateFromRequest($this->context . '.filter.category_id', 'filter_category_id', '');
    $this->setState('filter.category_id', $categoryId);

  
    // Load the parameters.
    $params = JComponentHelper::getParams('com_creditcards');
    $this->setState('params', $params);

    // List state information.
    parent::populateState('a.card_name', 'asc');
  }

     


}
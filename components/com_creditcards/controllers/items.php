<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Items Component Controller
 */
class CreditcardsControllerItems extends CreditcardsController
{

        public function __construct() {
                die('constructing');
        }


	 /**
         * display task
         *
         * @return void
         */
        public   function display($cachable = false, $urlparams = false) 
        {       
           
                // set default view if not set
                $input = JFactory::getApplication()->input;
                $input->set('view', $input->getCmd('view', 'items'));
 				
                // call parent behavior
                parent::display($cachable);
        }


        function categories() {

        }


        function items() {
        	
        }


}
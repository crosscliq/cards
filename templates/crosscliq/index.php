<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

$doc->setTitle('Isis Sales Tools');
$logo = $this->params->get('logoFile');

$templateColor = $this->params->get('templateColor');
$templateBackgroundColor = $this->params->get('templateBackgroundColor');


$cssfile = $this->params->get('cssfile');


// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');


// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');


$doc->addStyleSheet('templates/'.$this->template.'/css/jquery.mobile-1.2.0.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/jquery.mobile-1.2.0.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/jquery.mobile.alphascroll.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/isis.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/idangerous.swiper.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/idangerous.swiper.scrollbar.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/simple-app.css');
$doc->addStyleSheet('/templates/'.$this->template.'/css/list.css');
$doc->addScript('templates/' .$this->template. '/js/jquery-1.8.3.min.js');
$doc->addScript('templates/' .$this->template. '/js/jquery.mobile-1.2.0.min.js');
$doc->addScript('templates/' .$this->template. '/js/jquery.mobile.alphascroll.js');
$doc->addScript('templates/' .$this->template. '/js/simple-app.js');



$doc->addStyleSheet('templates/'.$this->template.'/css/'. $cssfile);

// Add current user information
$user = JFactory::getUser();


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<jdoc:include type="head" />



 </head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '');
?>">
<div data-role="page" style="background:#ccc!important" data-add-back-btn="false">

		<jdoc:include type="component" />
</div>
<script>
  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
  insertBefore(d,q)}(window,document,'script','_gs');
  
  _gs('GSN-464981-N');
</script>
</body>
</html>

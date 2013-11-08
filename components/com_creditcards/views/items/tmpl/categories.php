<?php
$doc = JFactory::getDocument();
$doc->addStyleSheet('/templates/crosscliq/css/list.css');

 ?>


<div data-role="header" data-position="fixed">
		<h1>Isis</h1>

<?php if(!strpos(JURI::current() , '/att')) : ?>

<?php $vendor = JFactory::getSession()->get('vendor');?>
<a href="#popupMenu" data-role="button" class="ui-btn-right" data-icon="bars"  data-rel="popup">Menu</a>
<div data-role="popup" id="popupMenu" >
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="b">
        <li><a data-rel="popup" href="<?=JURI::base().$vendor?>">Card Tool</a></li>
        <li><a data-rel="popup" href="http://demo.isismst.com/<?=$vendor?>">Demo</a></li>
        <li><a data-rel="popup" href="http://locator.isismst.com">Locator</a></li>
        <li><a data-rel="popup" href="http://offers.isismst.com">Offer Tool</a></li>
    </ul>
</div>

<?php endif; ?>
	</div>

	<h3 style="text-align:center;color:#9D1D86;">
Tap the issuer name below to see a list of eligible payment cards.<br>
	</h3>
	
<div style="width:300px; text-align:center; margin: 0 auto;">
	<a class="bigbutton" href="<?php echo JURI::current(); ?>/american-express" class="MAINnav">American Express</a> <br>
      <a class="bigbutton"  href="<?php echo JURI::current(); ?>/chase" class="MAINnav">Chase</a><br>
      <a class="bigbutton" href="<?php echo JURI::current(); ?>/other" class="MAINnav">Other</a><br>
</div>






	<!--<div class="swiper-pages swiper-container" style="text-align:center;height:100%!important;">
		<div class="swiper-wrapper" style="height:100%;"> -->

		<?php /*

 
$cats = $this->categories->getChildren();

foreach ($cats as $category) :  ?>
	<!-- <div class="swiper-slide" style="height:80%!important;"> -->
<div class="catButtonWrapper">
<a class="catButtons" href="<?php echo  JFilterOutput::stringURLSafe($category->title); //JRoute::_('index.php?option=com_creditcards&view=items&id='.$category->id); ?>">

<?php echo $category->title ; ?>	

</a>
</div>
<!--</div> -->

<?php 
endforeach;
*/
?>		



<!-- </div>
	</div> -->



<?php
$doc = JFactory::getDocument();
$doc->addStyleSheet('/templates/crosscliq/css/list.css');

 ?>


<div data-role="header" data-position="fixed">
		<h1>Isis</h1>

<?php /*if(!strpos(JURI::current() , '/att')) : ?>

<?php $vendor = JFactory::getSession()->get('vendor');?>
<a href="http://isismst.com/<?=$vendor?>"  class="ui-btn-right" data-icon="bars"  >Menu</a>


<?php endif; */ ?>
	</div>

	<h3 style="text-align:center;color:#9D1D86;">
Tap the issuer name below to see a list of eligible payment cards.<br>
	</h3>
	
<div style="width:300px; text-align:center; margin: 0 auto;">
	<a class="bigbutton" href="<?php echo JURI::current(); ?>/american-express" class="MAINnav">American Express</a> <br>
      <a class="bigbutton"  href="<?php echo JURI::current(); ?>/chase" class="MAINnav">Chase</a><br>
	<a class="bigbutton"  href="<?php echo JURI::current(); ?>/wells-fargo" class="MAINnav">Wells Fargo</a><br>     
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



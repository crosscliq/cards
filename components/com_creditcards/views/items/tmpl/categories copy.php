<div data-role="header" data-position="fixed">
		<h1>Isis</h1>
	</div>

	<h3 style="text-align:center;color:rgb(98, 23, 92);">
	Tap the logo below to see a list of Isis Ready Cards.<br/>

	</h3>
	
	<!--<div class="swiper-pages swiper-container" style="text-align:center;height:100%!important;">
		<div class="swiper-wrapper" style="height:100%;"> -->

		<?php 

 
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

?>		



<!-- </div>
	</div> -->



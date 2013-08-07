<div data-role="header" data-position="fixed">
		<h1>Isis</h1>
	</div>

	<h2 style="text-align:center;color:#fff;">
	Tap the logo below to see a list of Isis Ready Cards.<br/>
	<p><small>Swipe to see more banks</small></p>
	</h2>
	
	<div class="swiper-pages swiper-container" style="text-align:center">
		<div class="swiper-wrapper">

		<?php 

 
$cats = $this->categories->getChildren();

foreach ($cats as $category) :  ?>
	<div class="swiper-slide">

<a href="<?php echo  JFilterOutput::stringURLSafe($category->title); //JRoute::_('index.php?option=com_creditcards&view=items&id='.$category->id); ?>">


<img src="<?php echo $category->getParams()->get('image'); ?>">
</a>
</div>

<?php 
endforeach;

?>
		
			<div class="swiper-slide">
				<div class="swiper-container scroll-container">
					<div class="swiper-scrollbar"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="page-inner">
								<h1>Contacts</h1>
								<p>You can contact us using the following contacts form:</p>
								<form action="">
									<p><input type="text" name="first" placeholder="First Name..." id=""></p>	
									<p><input type="text" name="last" placeholder="Last Name..." id=""></p>	
									<p><input type="text" name="subject" placeholder="Subject..." id=""></p>	
									<p><textarea name="message" placeholder="Your message..." cols="30" rows="10"></textarea></p>
									<p><input type="submit" value="Send"></p>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




<?php

$jinput = JFactory::getApplication()->input;
?>

<div id="alphascroll"   data-title="Isis Sales Tools">
	<div data-role="header" data-position="fixed">
		<h1><a href="<?=substr(JURI::current(), 0, strrpos ( JURI::current(), '/' ));?>">Isis</a></h1>
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
	<div data-role="content">

								<p>Enter the information below if you would like to be contacted when your card becomes available on Isis. Your information will not be used for other marketing purposes.</p>
								<form action="/index.php?option=com_creditcards&view=items&task=register" method="post">
									<p><input type="text" name="bank" placeholder="Issuing Bank (e.g., Big City Bank)" id="" ></p>	
				
<p><input type="text" name="card" placeholder="Card Name (e.g., Platinum Card)" value='<?php echo  $jinput->get('cardname', '', 'string'); ?>'  id=""></p>
					<p><input type="text" name="email" placeholder="Your Email Address" id=""></p>	
											<p><input type="text" name="phone" placeholder="Your Phone Number" id=""></p>	
										<input name="return" type="hidden" value="<?php echo  substr(JURI::current(), 0, strrpos ( JURI::current(), '/' )); ?>">
										<input type="hidden" name="carrier" value="<?php echo  $jinput->get('carrier', '', 'int'); ?>" >
									<p><input type="submit" value="Submit"></p>
								</form>
	
<br clear="both">
<a target="_blank" style="float:right;" href="https://www.paywithisis.com/privacy.html">Privacy Policy</a>
<br clear="both">
	</div>
</div>

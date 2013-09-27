<?php

$jinput = JFactory::getApplication()->input;

?>

<div id="alphascroll" data-role="page" data-add-back-btn="true">
	<div data-role="header" data-position="fixed">
		<h1>Isis</h1>
	</div>
	<div data-role="content">

								<p>Enter the information below if you would like to be contacted when your card becomes available on Isis. Your information will not be used for other marketing purposes.</p>
								<form action="index.php?option=com_creditcards&view=request&task=register">
									<p><input type="text" name="card" placeholder="Your Card name" value='<?php echo  $jinput->get('cardname', '', 'string'); ?>'  id=""></p>	
									<p><input type="text" name="bank" placeholder="Issuing Bank" id="" ></p>	
									<p><input type="text" name="email" placeholder="Your Email Address" id=""></p>	
									<p><input type="text" name="phone" placeholder="Your Phone Number" id=""></p>	
									<input type="hidden" name="carrier" value="<?php echo  $jinput->get('carrier', '', 'int'); ?>" >
									<p><input type="submit" value="Submit"></p>
								</form>
	
<br clear="both">
<a style="float:right;" href="http://www.att.com/Common/about_us/privacy_policy/print_policy.html">Privacy Policy</a>
<br clear="both">
	</div>
</div>

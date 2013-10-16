<?php
$doc = JFactory::getDocument();
$doc->addStyleSheet('/templates/crosscliq/css/list.css');

 ?>


<div data-role="header" data-position="fixed">
		<h1>Isis</h1>
<?php $vendor = JFactory::getSession()->get('vendor');?>
<a href="#popupMenu" data-role="button" class="ui-btn-right" data-icon="bars"  data-rel="popup">Menu</a>
<div data-role="popup" id="popupMenu" >
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="b">
        <li><a data-rel="popup" href="<?=JURI::base().$vendor?>">Card Tool</a></li>
        <li><a data-rel="popup" href="http://demo.isismst.com">Demo</a></li>
        <li><a data-rel="popup" href="http://locator.isismst.com">Locator</a></li>
        <li><a data-rel="popup" href="http://offers.isismst.com">Offer Tool</a></li>
    </ul>
</div>

	</div>

	<h3 style="text-align:center;color:#9D1D86;">
Tap the issuer name below to see a list of eligible payment cards.<br>
	</h3>
	

	<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tbody>
  <tr>
    <td align="center" valign="top"><!-- #BeginLibraryItem "/Library/toolbar2-Home.lbi" --><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td align="center" valign="middle" bgcolor="#818285"><table border="0" cellspacing="0" cellpadding="4">
      <tbody>
    </tbody></table></td>
  </tr>
</tbody></table><!-- #EndLibraryItem --></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table>
      <table width="300" cellspacing="8" cellpadding="8">
        <tbody><tr>
          <td align="center" valign="middle" bgcolor="#9D1D86"><a  href="<?php echo JURI::current(); ?>/american-express" class="MAINnav">American Express</a></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#9D1D86"><a href="<?php echo JURI::current(); ?>/chase" class="MAINnav">Chase</a></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#9D1D86"><a href="<?php echo JURI::current(); ?>/other" class="MAINnav">Other</a></td>
        </tr>
       <!-- <tr>
          <td align="center" valign="middle" bgcolor="#003B7B"><a href="digital_life/digital_life-HOME.html" class="MAINnav">Digital Life</a></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#7FC241"><a href="international/international-HOME.html" class="MAINnav">International</a></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#0197D5"><a href="smart_solutions/smart_solutions-HOME.html" class="MAINnav">Smart Solutions</a></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#757679"><a href="business/business-HOME.html" class="MAINnav">Business</a></td>
        </tr> -->
    </tbody></table>      <br></td>
  </tr>
</tbody></table>






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



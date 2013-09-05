<div id="alphascroll" data-role="page">
	<div data-role="header" data-position="fixed">
	<a href="no.html" data-rel="back" data-icon="back" data-theme="b">Back</a>
		<h1>Isis</h1>
	<a href="no.html" data-icon="check" data-theme="b">&nbsp;</a>
	  <div class="ui-bar">
	   <h2><b><?=$this->items[0]->category_title;?></b></h2>
	  </div>
	</div>

<style type="text/css">
[data-url="/chase"] div ul.alphascroll {
	display:none!important;
}
[data-url="/wells-fargo"] div ul.alphascroll {
	display:none!important;
}
</style>
	<div data-role="content">
		<ul id="mylistview" data-role="listview" data-autodividers="true">
	<?php 

foreach($this->items as $item) : 

if ($item->category_title !=="American Express") { $card="visa"; } else { $card="amex"; }
?>
<!-- <li data-icon="false"><a href="<?php echo ($item->accepted == 1 ? 'yes.html' : 'no.html'); ?>"><h3><?php echo  $item->title ; ?></h3></a></li> -->
<li data-iconpos="right"> 

	<div class="ui-btn-text">
 		<h3><?php echo  $item->title ; ?></h3>
	</div>
 <img src="templates/crosscliq/img/<?=$card?>.png" alt="<?=$card?>" class="ui-li-thumb">
</li>
<?php endforeach; ?>
		</ul>
	</div>

</div>

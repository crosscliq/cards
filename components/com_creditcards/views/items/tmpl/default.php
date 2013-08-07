<div id="alphascroll" data-role="page">
	<div data-role="header" data-position="fixed">
		<h1>Isis</h1>
	</div>
	<div data-role="content">
		<ul id="mylistview" data-role="listview" data-autodividers="true">
	<?php 

foreach($this->items as $item) : ?>
<li data-icon="false"><a href="#" data-allowed="<?php echo ($item->accepted == 1 ? 'yes' : 'no'); ?>"><h3><?php echo  $item->title ; ?></h3></a></li>
<?php endforeach; ?>
			
			<li data-icon="false"><a href="#" data-allowed="no"><h3>zed</h3></a></li>
		</ul>
	</div>

</div>
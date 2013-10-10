<div id="alphascroll" data-role="page"  data-title="ISIS Sales Tools">
	
				<div data-role="header" data-position="fixed">
				<a href="no.php" data-rel="back" data-icon="back" data-theme="b">Back</a>
					<h1><a href="/" class="ui-title" aria-level="1" role="heading">Isis</a></h1>
				
							  <div class="ui-bar">
							   <h2><b><?=$this->items[0]->category_title;?></b></h2>
							  </div>
				</div>

			
					<div data-role="content">
						<ul id="mylistview" data-role="listview" data-autodividers="true">
												<?php 

											foreach($this->items as $item) : 

											if ($item->category_title !=="American Express") { $card="visa"; } else { $card=""; }
											?>

															<li > 
															 
															 <img src="templates/crosscliq/img/<?=$this->items[0]->category_title;?>.png" alt="<?=$item->network?>" class="ui-li-thumb" style="display: inline-block;height: 100%;vertical-align:middle;">
															
															 
															
																<div class="ui-btn-text">
															 		<h3><?php echo  $item->title ; ?></h3>
																	<div class="card_name"><?=$card?></div>
																</div>


																</li>
											<?php endforeach; ?>
						</ul>

					</div>




					<div id="bottomOverly">  <a href="<?php echo JURI::current(); ?>/no">Don't see your card? Click here.</a></div>

</div>

<script type="text/javascript">
if (typeof jQuery == 'undefined') {  
    window.location.href='http://cards.isismst.com';
}
</script>


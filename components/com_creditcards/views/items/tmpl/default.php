<div id="alphascroll" data-role="page">
	
				<div data-role="header" data-position="fixed">
				<a href="no.php" data-rel="back" data-icon="back" data-theme="b">Back</a>
					<h1>Isis</h1>
				
							  <div class="ui-bar">
							   <h2><b><?=$this->items[0]->category_title;?></b></h2>
							  </div>
				</div>

			
					<div data-role="content">
						<ul id="mylistview" data-role="listview" data-autodividers="true">
												<?php 

											foreach($this->items as $item) : 

											if ($item->category_title !=="American Express") { $card="visa"; } else { $card="amex"; }
											?>

															<li data-icon="false" > 
															



															
																<div class="ui-btn-text">
															 		<h3><?php echo  $item->title ; ?></h3>
																</div>
															 <img src="templates/crosscliq/img/<?=$item->network?>.png" alt="<?=$item->network?>" class="ui-li-thumb">

																</li>
											<?php endforeach; ?>
						</ul>

					</div>

					<div id="bottomOverly">  <a href="<?php echo JURI::current(); ?>/no"> Don't see your card click here</a></div>

<script>
$( '#mylistview' ).alphascroll();
</script>
</div>

<div id="alphascroll" data-role="page">
	
				<div data-role="header" data-position="fixed">
				<a href="no.php" data-rel="back" data-icon="back" data-theme="b">Back</a>
					<h1>Isis</h1>
				<a href="no.php" data-icon="check" data-theme="b">&nbsp;</a>
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
															<?php 
															if($item->accepted == 1) {
																$url = 'yes.html';
															} 
															else {
																$url = 'no.php';
																$url .= '?cardid='.$item->id;
																$url .= '&cardname='.$item->title;
																$url .= '&network='.$item->network;
															} 	

															?>



															<a href="<?php echo $url; ?>">
																<div class="ui-btn-text">
															 		<h3><?php echo  $item->title ; ?></h3>
																</div>
															 <img src="templates/crosscliq/img/<?=$item->network?>.png" alt="<?=$item->network?>" class="ui-li-thumb">

																</a></li>
											<?php endforeach; ?>
						</ul>
					</div>

<script>
$( '#mylistview' ).alphascroll();
</script>
</div>



<div id="alphascroll"  data-title="Isis Sales Tools">
	
				<div data-role="header" data-position="fixed">

					<h1><a href="<?=substr(JURI::current(), 0, strrpos ( JURI::current(), '/' ));?>">Isis</a></h1>


<?php if(!strpos(JURI::current() , '/att')) : ?>

<?php $vendor = JFactory::getSession()->get('vendor');?>
<a href="http://isismst.com/<?=$vendor?>"  class="ui-btn-right" data-icon="bars"  >Menu</a>


<?php endif; ?>
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
															 <div style="display: table-cell; height: 100%;vertical-align:middle;">
															 <img src="templates/crosscliq/img/<?=$this->items[0]->category_title;?>.png" alt="<?=$item->network?>">
															</div>
															 
															
																<div  style="padding-left:5px;display: table-cell">
															 		<h3 style="margin-top:10px; padding:0px 10px 0px 10px;"><?php echo  $item->title ; ?></h3>
																	<div class="card_name"><?=$card?></div>
																</div>


																</li>
											<?php endforeach; ?>
						
			
						</ul>
						<div style="height:40px;"></div>
					</div>

					


					<div id="bottomOverly">  <a href="<?php echo JURI::current(); ?>/no">Don't see your card? Click here.</a></div>

</div>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1,maximum-scale=1, user-scalable=no">
	  <base href="https://cards.isismst.com/att">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="Joomla! - Open Source Content Management">
  <title>Isis Sales Tools</title>
  <link href="https://cards.isismst.com/att?view=items&amp;layout=categories&amp;task=categories&amp;id=0" rel="canonical">
  <link href="/templates/crosscliq/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="/templates/crosscliq/css/jquery.mobile-1.2.0.min.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/jquery.mobile.alphascroll.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/isis.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/idangerous.swiper.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/idangerous.swiper.scrollbar.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/simple-app.css" type="text/css">
  <link rel="stylesheet" href="/templates/crosscliq/css/att.css" type="text/css">
  <script src="/templates/crosscliq/js/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="/templates/crosscliq/js/jquery.mobile-1.2.0.min.js" type="text/javascript"></script>
  <script src="/templates/crosscliq/js/jquery.mobile.alphascroll.js" type="text/javascript"></script>
  <script src="/templates/crosscliq/js/simple-app.js" type="text/javascript"></script>




 </head>
<body>

<div id="alphascroll" data-role="page"  data-title="Isis Sales Tools">
	
				<div data-role="header" data-position="fixed">
					<h1><a href="<?=substr(JURI::current(), 0, strrpos ( JURI::current(), '/' ));?>">Isis</a></h1>
				
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


</body>

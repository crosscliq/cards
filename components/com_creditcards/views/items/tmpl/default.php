
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

</div>

<script>
$( document ).ready( function() {

	names = ["Hannah Gilbert","JaMarcus Davidson","Sofia Wesley","Mark Smith","Genesis Hailey","Amelia Webster","Leah Hodges","Jocelyn Higgins","Madelyn Galbraith","Gabrielle Wayne","Elizabeth Cook","Zoe Calhoun","Natalie Sheldon","Maya Geraldo","Isabelle Morrison","Maria Turner","Lauren Hoggarth","Madelyn Osborne","Vanessa Nash","Khloe Mercer","Rachel Garblinski","Steven Goldman","Hailey Carrington","Judith Brickman","Julia Oliver","Jasmine Abramson","Brooke Creighton","Sophie Wainwright","Gabriella Walkman","Archibald Carrington","Isabella Haig","Peter Carrington","Gabrielle Crofton","Makayla Chandter","Miles Turner","Isabelle Wainwright","Andrew WifKinson","Brenda Brown","Scotty Nash","Ariana Clapton","Peyton Fulton","Victoria Brown","Molly Daniels","Cynthia Monroe","Payton Thomson","Payton Wainwright","Kylie Webster","Harry Chiglitz","Lawrence Gilson","Olivia Cook","Henry Miller","Natalie Smith","Zoey Wainwright","Charlotte Gardner","Ira Wallace","Samantha Brickman","Hannah Galbraith","Kayla Davidson","Nevaeh Osborne","Gabrielle Chesterton","Katherine Hamphrey","Jerry Michaelson","Victoria Gibbs","Barry Goodman","Vincent Wilthorpe","Barney Mercer","Camilla Kapinksy","Jessica Cook","Kaitlyn Vaughan","Evelyn Nash","Trinity Neal","Melanie Oswald","Sophia Goldman","Kimberly Nathan","Ashley Carter","Elizabeth Abramson","Vinny Amarillo","Layla Gardner","Irma Nathan","Leah Galbraith","Katherine Miln","Caroline Miller","Ernie Carter","Winston Smith","Fyodor Dostoevsky","Neville James","Lucrecious Carter","Zebediah Jones"];
	names.sort();

	var namesListHTML = '';
	$.each( names, function( i ) {
		namesListHTML += '<li data-icon="false"><a href="#"><h3>' + names[i] + '</h3></a></li>';
	});
	$( '#mylistview' ).append( namesListHTML );
	$( '#mylistview' ).listview( 'refresh' ).alphascroll();

});
</script>
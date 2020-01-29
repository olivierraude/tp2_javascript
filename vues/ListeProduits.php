<section class="liste">

	<ul class="wrapper" data-component="ProduitList">

		<?php

			foreach($data as $produit)
			{
			?>
				<div class="grid-item">
					<li>
						<img src=<?= $produit["produitImage"]?>>
						<?=$produit["produitNom"]?> 
						<?=$produit["produitPrix"] . "$"?>
					</li>
				</div>	
			<?php
			}
		?>

	</ul>

	<div class="load" data-component="ProduitList">
		<button class="more" data-js-more><img class="arrow" src="/JS/tp2/assets/images/logo/plus.svg" alt="plus"></button>
	</div>
</section>

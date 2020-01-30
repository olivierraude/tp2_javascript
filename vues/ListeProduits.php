<<<<<<< HEAD
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
=======
<section class="liste" data-component="ProduitList">
	<ul class="wrapper">
		<?php
			foreach($data as $produit)
			{
		?>
			<div class="grid-item" data-js-results>
				<img src=<?= $produit["produitImage"]?>></img> 
				<li><?=$produit["produitNom"]?> <?=$produit["produitPrix"] . "$"?></li>
			</div>	
		<?php
			}
		?>
	</ul>
</section>

<div class="load">
	<button class="more" data-js-more><img class="arrow" src="/JS/tp2/assets/images/logo/plus.svg" alt="plus"></button>
</div>
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307

<section class="liste" data-component="ProduitList">
	<div ></div>
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
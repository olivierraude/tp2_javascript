<<<<<<< HEAD
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
=======
<section class="liste" data-js-produit-trie>
	<div data-js-results></div>
</section>

<div class="load">
	<button class="more"><img class="arrow" src="/JS/tp2/assets/images/logo/plus.svg" alt="plus"></button>
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307
</div>
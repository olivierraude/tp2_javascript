<section class="liste" data-component="ProductList">

	<div data-js-results>

		<ul class="wrapper" >

			<?php

				foreach($data as $produit)
				{
				?>
					<div class="grid-item" data-js-product>
						<li>
							<img src=<?= $produit["produitImage"]?> data-js-image>
							<p class="name" data-js-name> <?=$produit["produitNom"]?> </p>
							<p class="price" data-js-price> <?=$produit["produitPrix"] . "$"?> </p>
						</li>
					</div>	
				<?php
				}
			?>
		</ul>

	</div>
	
	<!-- <div class="load">
		<button class="more" data-js-more><img class="arrow" src="/JS/tp2/assets/images/logo/plus.svg" alt="plus"></button>
	</div> -->
</section>

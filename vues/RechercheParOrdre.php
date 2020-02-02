<section>
	<div data-component="ProductSort">
		<select data-js-select="tri">

			<option action="index.php?Boutique_AJAX&action=afficheListeProduits" value="id">Trier par</option>
			<option action="index.php?Boutique_AJAX&action=afficheListeProduits" value="prix">Recherche par ordre de prix</option>
			<option action="index.php?Boutique_AJAX&action=afficheListeProduits" value="nom">Recherche par ordre alphabétique</option>

		</select>

		<!-- <div data-js-results></div> -->
	</div>

	<div class="load" data-component="ProductList">
		<button class="more" data-js-more><img class="arrow" src="/JS/tp2/assets/images/logo/plus.svg" alt="plus"></button>
	</div>
</section>
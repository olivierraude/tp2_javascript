<article>
	<h3>Tous les restaurants de ce type</h3>
	<ul>
	<?php
		foreach($data as $produit)
		{
	?>
		<img src=<?= $produit["produitImage"]?>></img><li><?= "Nom : " . $produit["produitNom"]?></li>
	<?php
		}
	?>
	</ul>
</article>

<ul class="wrapper">
<?php
	foreach($data as $produit)
	{
?>
<div class="grid-item">
	<img src=<?= $produit["produitImage"]?>></img> 
	<li><?=$produit["produitNom"]?> <?=$produit["produitPrix"] . "$"?></li>
</div>	
<?php
	}
?>
</ul>

<section>
	<h2>Choisir un types de restaurants</h2>


	<div data-component="FormValidation">
		<form action="index.php?Restaurants_AJAX&action=afficheRestaurantParType&id=">
			<select name="types" data-js-param="id=">
			<?php
				foreach($data as $type)
				{
			?>
				<option value="<?= $type['ID']?>"> <?= $type["Nom"]?> </option>
			<?php
				}
			?>
			</select>
			

			<button data-js-btn>Soumettre</button>

		</form>

		<div data-js-results></div>
	</div>
<section>
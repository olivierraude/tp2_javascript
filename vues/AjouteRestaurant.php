<section>
    <h2>Ajouter un restaurant</h2>

    <div data-component="FormValidation">
        <form action="index.php?Restaurants_AJAX&action=ajouteRestaurant&nom=&id=">
            
            <label>Nom :&nbsp;&nbsp;<input type="text" required data-js-param="nom="></label>
            

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
</section>
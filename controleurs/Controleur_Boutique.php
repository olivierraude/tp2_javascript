<?php
	class Controleur_Boutique extends BaseControleur
	{
	
		//la fonction qui sera appelée par le routeur
		public function traite(array $params)
		{
			$this->afficheVue("Head");

			//modèle et vue vides par défaut
			$data = array();

			$vue = "Header";	
			$this->afficheVue($vue);
			$vue = "RechercheParOrdre";	
			$this->afficheVue($vue);
			
			//action par défaut
			$modeleBoutique = new Modele_Boutique();
			$data = $modeleBoutique->obtenirProduits('id', 0);
			$vue = "ListeProduits";		
			$this->afficheVue($vue, $data);
			
			$this->afficheVue("Footer");
		}
	}
?>


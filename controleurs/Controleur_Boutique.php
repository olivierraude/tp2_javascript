<?php
	class Controleur_Boutique extends BaseControleur
	{
	
		//la fonction qui sera appelée par le routeur
		public function traite(array $params)
		{
			$this->afficheVue("Head");

			$vue = "Header";	
			$this->afficheVue($vue);
			$vue = "RechercheParOrdre";	
			$this->afficheVue($vue);
			
			//action par défaut
			$modeleBoutique = new Modele_Boutique();
			//$tri = "id";
			$data = $modeleBoutique->obtenirProduits('id');
			$vue = "ListeProduits";		
			$this->afficheVue($vue, $data);

/*
			else if(isset($params["action"]))
			{
				//modèle et vue vides par défaut
				$data = array();
				
				//switch en fonction de l'action qui nous est envoyée
				//ce switch détermine la vue $vue et obtient le modèle $data
				switch($params["action"])
				{
					case "RechercheParAlpha":
										
						$modeleBoutique = new Modele_Boutique();
						$data = $modeleBoutique->obtenirProduitsParAlpha();
						$vue = "ListeProduits";
						$this->afficheVue($vue, $data);

						break;
					
					case "RechercheParPrix":
										
						$modeleBoutique = new Modele_Boutique();
						$data = $modeleBoutique->obtenirProduitsParPrix();
						$vue = "ListeProduits";
						$this->afficheVue($vue, $data);

						break;
					
	
					default:
						$modeleBoutique = new Modele_Boutique();
						$data = $modeleBoutique->obtenirTous();
						$vue = "ListeProduits";
						$this->afficheVue($vue, $data);
						break;
				}			
			}
*/			
			$this->afficheVue("Footer");
		}
	}
?>
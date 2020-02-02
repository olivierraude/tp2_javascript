<?php
	class Controleur_Boutique_AJAX extends Controleur_Boutique
	{	
		//la fonction qui sera appelée par le routeur
		public function traite(array $params)
		{				
            if(isset($params["action"]))
			{
				//retirer la vue de produits non triés
				//$this._el.removeChild($this._el.firstChild);

				//modèle et vue vides par défaut
				$data = array();
                $vue = "";					
                
				//switch en fonction de l'action qui nous est envoyée
				//ce switch détermine la vue $vue et obtient le modèle $data
				switch($params["action"])
				{
					case "afficheListeProduits":
						if ((isset($params["tri"]) && $params["offset"]))
                        {
							$modeleBoutique = new Modele_Boutique();
							$data = $modeleBoutique->obtenirProduits($params["tri"],$params["offset"]);
							//var_dump($params["tri"]);
							//var_dump($params["offset"]);
                        	//$vue = "Resultats";
                        	$vue = "ListeProduits";
                        	$this->afficheVue($vue, $data);
						}
						break;	
          	
					default:
						echo "ERROR IN SWITCH";		
				}						
			}
			else
			{
				//action par défaut
				echo "ERROR";					
			}			
		}	
	}
?>
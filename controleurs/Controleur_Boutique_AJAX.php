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
    //Functions et cas à modifier => restaurants = produits
					case "afficheListeProduits":						
						$modeleBoutique = new Modele_Boutique();
                        $data = $modeleBoutique->obtenirProduits($tri);
                        $vue = "ListeProduitsTrie";
                        $this->afficheVue($vue, $data);
						
						break;	

                    case "afficheProduitParPrix":
						//modèle et vue vides par défaut
						$data = array();
						$modeleBoutique = new modele_Boutique();
						$data = $modeleBoutique->obtenirProduitsParPrix();
						$vue = "ListeProduits";
						$this->afficheVue($vue, $data);
						
						break;
                    
                    case "afficheProduitParAlpha":  
    //modèle et vue vides par défaut
						$data = array();
						$modeleBoutique = new modele_Boutique();
						$data = $modeleBoutique->obtenirProduitsParAlpha();
						$vue = "ListeProduits";
						$this->afficheVue($vue, $data);
                        
                        break;	
            	
					default:
						echo "ERROR";		
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
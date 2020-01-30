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
<<<<<<< HEAD
					//Functions et cas à modifier => restaurants = produits
					case "afficheListeProduits":
						if (isset($params["tri"]))
                        {	
						var_dump($params["tri"]);
						$modeleBoutique = new Modele_Boutique();
                        $data = $modeleBoutique->obtenirProduits($params["tri"]);
                        $vue = "ListeProduits";
                        $this->afficheVue($vue, $data);
						}
						break;	
/*
=======
    //Functions et cas à modifier => restaurants = produits
					case "afficheListeProduits":						
						$modeleBoutique = new Modele_Boutique();
                        $data = $modeleBoutique->obtenirProduits($tri);
                        $vue = "ListeProduitsTrie";
                        $this->afficheVue($vue, $data);
						
						break;	

>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307
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
*/           	
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
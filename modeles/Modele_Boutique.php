<?php
	class Modele_Boutique extends TemplateDAO
	{
		public function getTable()
		{
			return "produits";
		}	
		
		public function obtenirProduits($tri)
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits
<<<<<<< HEAD
													ORDER BY '" . $tri . "' ASC
=======
													ORDER BY $tri ASC
>>>>>>> 2a5a426b46e8475a82942dd10a1b265abc988307
													LIMIT 12");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}
		
	/*
		public function obtenirProduitsParAlpha($name, $idLimit, $idOffset)
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits 
													ORDER BY nom ASC
													LIMIT 12");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}
		public function obtenirProduitsParPrix($price, )
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits 
													ORDER BY prix = $prix ASC
													LIMIT 12");	
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}
	*/
	}
?>
<?php
	class Modele_Boutique extends TemplateDAO
	{
		public function getTable()
		{
			return "produits";
		}	
		
		public function obtenirTous()
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits
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
		public function obtenirTypeRestaurant()
		{
			try
			{
				$stmt = $this->connexion->prepare("select * from typecuisines");
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}
*/
		public function obtenirProduitsParAlpha()//Pas besoin d'id.
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits 
													ORDER BY nom ASC
													LIMIT 12");
				//$stmt->bindParam(":id", $id);
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}

		public function obtenirProduitsParPrix()//Pas besoin d'id.
		{
			try
			{
				$stmt = $this->connexion->prepare("SELECT produits.id as produitId, produits.nom as produitNom, produits.prix as produitPrix, produits.lienimage as produitImage, produits.inventaire as produitInventaire
													FROM produits 
													ORDER BY prix ASC
													LIMIT 12");
				//$stmt->bindParam(":id", $id);
				$stmt->execute();
				return $stmt->fetchAll();
			}	
			catch(Exception $exc)
			{
				return 0;
			}
		}
		
	}
?>
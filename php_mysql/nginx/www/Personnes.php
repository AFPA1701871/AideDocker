<?php

class Personnes 
{

	/*****************Attributs***************** */

	private $_idPersonne;
	private $_nom;
	/***************** Accesseurs ***************** */
	public function getIdPersonne()
	{
		return $this->_idPersonne;
	}

	public function setIdPersonne($idPersonne)
	{
		$this->_idPersonne = $idPersonne;
	}

	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	
	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value===""?null:$value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdPersonne : ".$this->getIdPersonne()." nom : ".$this->getNom()."\n";
	}
}


class PersonnesServices 
{

	public static function add(Personnes $obj)
	{
		$db = DbConnect::getDb();
		$requ = "INSERT INTO Personnes (Nom) Values (".$obj->getNom().");";
		$q = $db->prepare($requ);
		return $q->execute();

	}

	// public static function update(Personnes $obj)
	// {
 	// 	return DAO::update($obj);
	// }

	// public static function delete(Personnes $obj)
	// {
 	// 	return DAO::delete($obj);
	// }

	// public static function findById($id)
	// {
 	// 	return DAO::select(Personnes::getAttributes(),"Personnes",["idProduit" => $id])[0];
	// }

	public static function getList()
	{
		$db = DbConnect::getDb();
		$requ = "Select * from Personnes;";
		$q = $db->query($requ);
		$liste=[];
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) { 
			if ($donnees != false) {
				$liste[] = new Personnes($donnees);
			}
		}
		return $liste;
	}

	
}
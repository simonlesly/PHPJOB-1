<?php
class Entreprise {
	//Constructeurs
	public $nom;
	public $vocation;
	public $lieu;

	//Constructeur
	function __construct($nom, $vocation, $lieu){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->lieu = $lieu;
	}
}

class Personne {
	//Attributs
	
	private function afficher() {
		$this->num . '<br/>';
		$this->nom . '<br/>';
		$this->prenom . '<br/>';
		$this->entreprise->nom . '<br/>';
		protected $id;
		protected $mail;
		protected $salaire;
	}

	//Constructeur
	function __construct($id, $nom, $prenom, $mail, $tel, $salaire){
		$this->num = $id;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->mail = $mail;
		$this->tel = $tel;
		$this->salaire = $salaire;
	}

	//Accesseurs
	public function getId($id){
		return $id;
	}
	public function getNom($nom){
		return $nom;
	}
	public function getPrenom($prenom){
		return $prenom;
	}
	public function getMail($mail){
		return $mail;
	}
	public function getTel($tel){
		return $tel;
	}

	//Méthodes
	private function afficher() {

	}

	public calculerSalaire() {
		echo "Erreur de connexion à la BDD";
	}
}
?>
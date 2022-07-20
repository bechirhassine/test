<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Client{
	private $Id_client;
	private $Nom;
	private $Prenom;
	private $Email;
	private $Solde;
	    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	
	function __construct($Nom,$Prenom,$Email,$Solde){
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Email=$Email;
		$this->Solde=$Solde;
	}
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/
	
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getEmail(){
		return $this->Email;
	}
	function getSolde(){
		return $this->Solde;
	}
	
/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setPrenom($Prenom){
		$this->Prenom=$Prenom;
	}
	function setEmail($Email){
		$this->Email=$Email;
	}
	function setSolde($Solde){
		$this->Solde=$Solde;
	}
	
	
}

?>
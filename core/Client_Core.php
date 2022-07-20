<?PHP
include "config.php";
class Client_Core {
function afficherClient ($Client){
		echo "Nom: ".$Client->getNom()."<br>";
		echo "Prenom: ".$Client->getPrenom()."<br>";
		echo "Email: ".$Client->getEmail()."<br>";
		echo "Solde: ".$Client->getSolde()."<br>";
		
	}
	
	function ajouterClient($Client){
		$sql="insert into Client (	Prenom,Nom,Email,Solde) values (:Prenom,:Nom,:Email,:Solde)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        
        $Prenom=$Client->getPrenom();
        $Nom=$Client->getNom();
        $Email=$Client->getEmail();
        $Solde=$Client->getSolde();
        
  		
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Solde',$Solde);
		
         
         if( $req->execute()){
         	return 1;
         }else{
         	return 0;
         }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		$sql="SElECT * From Client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($Nom){
		$sql="DELETE FROM Client where Nom= :Nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function modifierClient($Nom,$argument,$valeur){
		$sql="UPDATE Client SET ".$argument."=:".$argument." WHERE Nom=:Nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":Prenom"=>$Nom,
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererClient($Prenom){
		$sql="SELECT * from Client where Prenom=$Prenom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}

?>
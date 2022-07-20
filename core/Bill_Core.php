<?PHP
include "config.php";
class Bill_Core {
function afficherBill ($Bill){
		echo "FULL_NAME: ".$Bill->getFULL_NAME()."<br>";
		echo "NAME_ON_CARD: ".$Bill->getNAME_ON_CARD()."<br>";
		echo "ADRESS: ".$Bill->getADRESS()."<br>";
		echo "DUE_DATE: ".$Bill->getDUE_DATE()."<br>";
		echo "CREATE_DATE: ".$Bill->getCREATE_DATE()."<br>";
		echo "TOTAL: ".$Bill->getTOTAL()."<br>";
		
	}


	
	function ajouterBill($Bill){
		$sql="insert into billing (	FULL_NAME,NAME_ON_CARD,ADRESS,DUE_DATE,CREATE_DATE,TOTAL,STATUS) values (:FULL_NAME,:NAME_ON_CARD,:ADRESS,:DUE_DATE,:CREATE_DATE,:TOTAL,:STATUS)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $date = date('y-m-d');
        $date_future= date('Y-m-d', strtotime('+1 year'));
        $FULL_NAME=$Bill->getFULL_NAME();
        $NAME_ON_CARD=$Bill->getNAME_ON_CARD();
        $ADRESS=$Bill->getADRESS();
        $TOTAL=$Bill->getTOTAL();
        $STATUS="Not Payed";
  		
		$req->bindValue(':FULL_NAME',$FULL_NAME);
		$req->bindValue(':NAME_ON_CARD',$NAME_ON_CARD);
		$req->bindValue(':ADRESS',$ADRESS);
		$req->bindValue(':DUE_DATE',$date_future);
		$req->bindValue(':CREATE_DATE',$date);
		$req->bindValue(':TOTAL',$TOTAL);
		$req->bindValue(':STATUS',$STATUS);
         
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
	
	function afficherBills(){
		$sql="SElECT * From billing";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerBill($FULL_NAME){
		$sql="DELETE FROM billing where FULL_NAME= :FULL_NAME";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':FULL_NAME',$FULL_NAME);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function modifierBill($FULL_NAME){
		
		$sql="UPDATE billing SET STATUS  = 'Payed' WHERE FULL_NAME='".$FULL_NAME."'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		
try{		
        $req=$db->prepare($sql);
         $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererBill($FULL_NAME){
		$sql="SELECT * from billing where FULL_NAME= '". $FULL_NAME ."'";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
	
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
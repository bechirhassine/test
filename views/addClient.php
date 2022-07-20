<?PHP
include "../entities/Client.php";
include "../core/Client_Core.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['Prenom' ,'Nom' ,'Email','Solde'])){

$Client1=new Client($_POST['Prenom'],$_POST['Nom'],$_POST['Email'],$_POST['Solde']);

$Client_Core1=new Client_Core();
if($Client_Core1->ajouterClient($Client1)){
header('Location:Client1.php?operation=ok');	
}
else{
	echo "vérifier les champs";
}
}
//*/

?>
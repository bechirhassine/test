<?PHP
include "../entities/Bill.php";
include "../core/Bill_Core.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['FULL_NAME' ,'NAME_ON_CARD' ,'ADRESS','TOTAL'])){

$Bill1=new Bill($_POST['FULL_NAME'],$_POST['NAME_ON_CARD'],$_POST['ADRESS'],$_POST['TOTAL']);

$Bill_Core1=new Bill_Core();
if($Bill_Core1->ajouterBill($Bill1)){
header('Location:Bill1.php?operation=ok');	
}
else{
	echo "vérifier les champs";
}
}
//*/

?>


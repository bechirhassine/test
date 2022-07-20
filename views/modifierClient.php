<?PHP
include "../entities/Client.php";
include "../core/Client_Core.php";

if (isset($_POST['modifier']) and !empty($_POST["Nom"])){
	extract($_POST);
	
	
	
	if(isset($_POST["Email"])){	
		if(!empty($_POST["Email"])){
		Client_Core::modifierClient($_POST["Nom"],"Email",$Email);
			header('Location: Client1.php?operation=update');
	}
}
if(isset($_POST["Solde"])){
		if(!empty($_POST["Solde"])){
		Client_Core::modifierClient($_POST["Nom"],"Solde",$Solde);
			header('Location: Client1.php?operation=update');
	}
}

}
?>

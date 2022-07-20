<?PHP
include "../entities/produit.php";
include "../core/produitP.php";

if (isset($_POST['modifier']) and !empty($_POST["Nom"])){
	extract($_POST);
	
	
	if(isset($_POST["Categorie"])){
	if(!empty($_POST["Categorie"])){
		produitP::modifierProduit($_POST["Nom"],"Categorie",$Categorie);
			header('Location: ../Client1.php?operation=update');
	}
	}
	if(isset($_POST["Email"])){	
		if(!empty($_POST["Email"])){
		produitP::modifierProduit($_POST["Nom"],"Email",$Email);
			header('Location: ../Client1.php?operation=update');
	}
}
if(isset($_POST["Solde"])){
		if(!empty($_POST["Solde"])){
		produitP::modifierProduit($_POST["Nom"],"Solde",$Solde);
			header('Location: ../Client1.php?operation=update');
	}
}

}
?>

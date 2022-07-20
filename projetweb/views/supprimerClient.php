<?PHP
include "../core/Client_Core.php";
$Client_Core=new Client_Core();
if (isset($_POST["Nom"])){
	$Client_Core->supprimerClient($_POST["Nom"]);
	header('Location: CLient1.php?operation=oksupp');
}

?>


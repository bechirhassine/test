<?PHP
include "../core/Bill_Core.php";
$Bill_Core=new Bill_Core();
if (isset($_POST["FULL_NAME"])){
	$Bill_Core->supprimerBill($_POST["FULL_NAME"]);
	header('Location: Bill1.php?operation=oksupp');
}

?>


<?PHP
include "../entities/Bill.php";
include "../core/Bill_Core.php";

if (isset($_POST["FULL_NAME"])){
	extract($_POST);
	$Bill_Core1=new Bill_Core();

		$Bill_Core1->modifierBill($_POST["FULL_NAME"]);
			header('Location: afficherBill.php');
	


}
?>

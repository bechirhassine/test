<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Bill{
	private $Id_inovice;
	private $FULL_NAME;
	private $NAME_ON_CARD;
	private $ADRESS;
	private $DUE_DATE;
	private $CREATE_DATE;
	private $TOTAL;
	
	    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	
	function __construct($FULL_NAME,$NAME_ON_CARD,$ADRESS,$TOTAL){
		$this->FULL_NAME=$FULL_NAME;
		$this->NAME_ON_CARD=$NAME_ON_CARD;
		$this->ADRESS=$ADRESS;
		$this->TOTAL=$TOTAL;
		
	}
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/
	
	function getFULL_NAME(){
		return $this->FULL_NAME;
	}
	function getNAME_ON_CARD(){
		return $this->NAME_ON_CARD;
	}
	function getADRESS(){
		return $this->ADRESS;
	}
	function getDUE_DATE(){
		return $this->DUE_DATE;
	}
	function getCREATE_DATE(){
		return $this->CREATE_DATE;
	}
	function getTOTAL(){
		return $this->TOTAL;
	}
	function getSTATUS(){
		return $this->STATUS;
	}
	
/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setFULL_NAME($FULL_NAME){
		$this->FULL_NAME=$FULL_NAME;
	}
	function setNAME_ON_CARD($NAME_ON_CARD){
		$this->NAME_ON_CARD=$NAME_ON_CARD;
	}
	function setADRESS($ADRESS){
		$this->ADRESS=$ADRESS;
	}
	function setDUE_DATE($DUE_DATE){
		$this->DUE_DATE=$DUE_DATE;
	}
	
	function setCREATE_DATE($CREATE_DATE){
		$this->CREATE_DATE=$CREATE_DATE;
	}
	
	function setTOTAL($TOTAL){
		$this->TOTAL=$TOTAL;
	}
	function setSTATUS($STATUS){
		$this->STATUS=$STATUS;
	}
	
	
}

?>
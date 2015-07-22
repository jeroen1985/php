<?
class calc {
	var $a=0;
	var $b=0;

	function __construct($a,$b){
		$this->a=$a;
		$this->b=$b;
	}
	
	protected function sum(){

	$total = $this->a+$this->b; 
	
	return $total;
	}

}

class childcalc extends calc{

	function __construct($a,$b,$c){
	 parent::__construct($a,$b);
		$this->c=$c;
        }	

	public function sumPublic(){
	
	$total=$this->sum()+$this->c;
	return $total;
	}

}


$versie2 = new childcalc(112,32,40);

var_dump($versie2);

echo $versie2->sumPublic();

?>

<?

$amount = 20;
$firstNumber = 0;
$successor = 1;

echo $firstNumber;
echo $successor;

for ($i=0; $i < $amount; $i++){
	$current=$firstNumber+$successor;
	echo "/n".$current;
	$firstNumber = $successor;
	$successor = $current;
}

?>


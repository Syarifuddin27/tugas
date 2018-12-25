<div class="card-body">
<?php  
	// Anagram
	if (isset($_POST['proses_A'])) {
		// echo "Anagram";
		$a1 = $_POST['first'];
		$a2 = $_POST['second'];

		anagram($a1, $a2);

	}

	// Unique
	if (isset($_POST['proses_U'])) {
		$a1 = $_POST['uniq'];

		isUnique($a1);

	}

	// Compress
	if (isset($_POST['proses_C'])) {
		$a1 = $_POST['com'];
		echo "<center>";
		compress($a1);
	}

	// Swap 
	if (isset($_POST['proses_S'])) {
		$a1 = $_POST['val1'];
		$a2 = $_POST['val2'];

		echo "<center> Kar 1 = ". $a1. "</br> Kar 2 = ". $a2. "</br>";

		swap($a1, $a2);

		echo "<center></br> After Swap </br>";
		echo "<center>Kar 1 = ". $a1. "</br> Kar 2 = ". $a2;
	}

	// Segitiga Pascal
	if (isset($_POST['proses_SG'])) {

	  	$n = $_POST['sg'];

	  	for($i=1; $i <= $n; $i++){
	    	echo "<center>";
	  	for($j=1; $j<=$i; $j++){

	   	if($j==1 || $j==$i){
	    	$value[$i][$j]=1;
	   	} else {
	    	$value[$i][$j]=$value[$i-1][$j] + $value[$i-1][$j-1];
	   	}
	   		echo $value[$i][$j]." ";
	  	}
	  		echo "</center><br>";
	 	}
	}

	// Sortig Arry
	if (isset($_POST['proses_ST'])) {
		// $sort = $_POST['sort'];
		// echo $sort;
		$arr = explode(" ", $_POST['sort']);
		// $sorting = array_push(arr, var);
		sort($arr);
		echo "<center>";
		foreach ($arr as $key => $value) {
			echo $value. "\n";
		}

	}






	// is Anagram
	function anagram($str1, $str2)
	{
		$arr1 = count_chars(strtolower($str1));
		$arr2 = count_chars(strtolower($str2));

		if ($arr1 == $arr2) {
			echo "<center>true";
		} else {
			echo "<center>false";
		}
	}

	// is Unique
	function isUnique($string)
	{
	  	$str = str_split($string, 1);
	  	$count = array();

	  	foreach ($str as $val) {
			$count[] = substr_count($string, $val);
	  	}	

	  	if (in_array('2', $count)){
	  		echo "<center>false";
	  	} else{
	  		echo "<center>true";
	  	}
	}

	// is Compress
	function compress($value)
	{
		$data = count_chars($value, 1);
		foreach ($data as $key => $value){
			// echo "<center>";
			echo chr($key). $value;

		}
	}

	// is Swap
	function swap(&$a, &$b) {
        list($b, $a) = array($a, $b);
    }

?>
</div>
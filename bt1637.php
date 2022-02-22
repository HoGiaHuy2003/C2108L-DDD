<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $count = 0;
    $num = 10;
    function fibonaci($n)
    {
        if($n == 0 || $n == 1)
        {
            return 1;
        }
        global $count;
        $count++;
        return fibonaci($n - 1) + fibonaci($n - 2);
    }
	echo "<h3>Day Fibonaci</h3><br/>";
	for ($i=0; $i < $num; $i++) 
    {
		$f = fibonaci($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";

	$data = [1, 1]; 
	$count = 0;
	function fibonaci2($n) {
		global $count, $data;
		if(isset($data[$n])) 
        {
            return $data[$n];
        }
		$count++;
		$s = fibonaci2($n - 1) + fibonaci2($n - 2);
		$data[$n] = $s;
		return $s;
	}
	echo "<h3>Day Fibonaci</h3><br/>";
	for ($i=0; $i < $num; $i++) {
		$f = fibonaci2($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";
    ?>
</body>
</html>
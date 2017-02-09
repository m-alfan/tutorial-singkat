<!DOCTYPE html>
<html>
<head>
     <title>Fibonacci</title>
</head>
<body>
 	<?php $level = isset($_GET['level']) ? (int)$_GET['level'] : '';?>
	<form method="get" action="#">
        <center>
	        <label>
			    <h3>Rumus pohon Fibonacci</h3>
			    Input level
			    <input type="text" name="level" value="<?=$level?>">
			    <input type="submit" name="proses" value="Submit">
			</label>
        </center>
    </form>
 
    <?php if(!empty($level)) :
     $start = 0;
     $temp = [];
	     echo '
	 
	<pre>';
	     while ($start <= $level) {
	         //set spasi di awal
	         for($a = 1; $a <= ($level-$start); $a++) {
	             echo "\t";
	         }
	         //mulai hitung
	         $fibonacci = "0\t\t";
	         if($start < 3) {
	             $temp[0] = 0;
	             for ($i = 1; $i <= $start ; $i++) {
	                 $temp[$i] = 1;
	                 $fibonacci .= $temp[$i];
	                 $fibonacci .= "\t\t";
	             }
	             $temp[$i] = 0;
	         } else {
	             $oldTemp = $temp;
	             $temp[0] = 0;
	             for ($i = 1; $i <= $start ; $i++) {
	                 $temp[$i] = $oldTemp[$i-1] + $oldTemp[$i];
	                 $fibonacci .= $temp[$i];
	                 $fibonacci .= "\t\t";
	             }
	             $temp[$i] = 0;
	         }
	         $fibonacci .= '0';
	              echo $fibonacci;
	              echo "\n\n";
	 
	         $start++;
	     }
	     echo '</pre>
	 
	';
	 endif;?>
</body>
</html>
<title>Task Logic 2</title>
<?php
$n=6;
for($i=1;$i<=$n*2+1;$i++){
	echo (" # ");
}
echo "</br>";
for($i=1;$i<= ($n+1); $i++){
	for($j=1;$j <= ($n+2);$j++){
		if($j==1){
			echo ("#");
		}
		if($j==($n+2)){
			echo ("#");
		}
		if(($i==$j)||($j==($n+2-$i))){
			echo (" # ");
		}
		else{
			echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
		}
	}
	echo "<br>";
}
for($i=1;$i<=$n*2+1;$i++){
	echo (" # ");
}
?>
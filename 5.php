<?php 

function hitung($x,$y){
	$data[]=$y;
	$i=0;
	do {
		$arr=(($y+$i)**2)%($x+$i);
		$i++;
		$data[]=$arr;
	} while ($arr !== 0 or $arr !==1);
	

	return $data;

}


$hasil= hitung(5,3);
echo "$hasil";
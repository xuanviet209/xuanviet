<?php
	$toan = 7;
	$ly = 8;
	$hoa = 10;
	$su = 6;
	$van = 10;
	$tiengAnh = 10;	
	$tong = ($toan+$ly+$hoa+$su+$van+$tiengAnh);
	$trungBinh = $tong/6;
	$tich = ($toan*$ly*$hoa*$su*$van*$tiengAnh);
	if ($tich < 0) {
		echo "Chấm sai thang điểm 0 ->10";
	}
	elseif ($toan > 10 || $ly > 10 || $hoa > 10 || $su > 10 || $van > 10 || $tiengAnh > 10) {
		echo "Chấm sai thang điểm 0 ->10";
	}
	elseif ($toan < 4 || $ly < 4 || $hoa < 4 || $su < 4 || $van < 4 || $tiengAnh < 4) {
		echo "Xếp loại yếu";
	}elseif ($trungBinh >=5 && $trungBinh <=6.4 ) {
		echo "Xếp loại trung bình";
	}elseif ($trungBinh >=6.5 && $trungBinh <=7.9 ) {
		echo "Xếp loại khá";
	}	
	elseif ($trungBinh >7.9) {
		echo "Xếp loại Giỏi";
	}
?>
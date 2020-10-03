<?php
    function tinhTong()
	{
		$sothunhat = 3;
		$sothuhai = 5;
		return $sothunhat+$sothuhai;
	}
	function tinhTongNoReturn()
	{
		$sothunhat =3;
		$sothuhai =5;
		echo $sothunhat+$sothuhai;
	}
	//gọi hàm
	$ketqua= tinhTong();
	echo"<br>ket qua của ham co return:".$ketqua;
	$sothuba=tinhTong()+5;
	echo"<br>có thể dùng kết quả của hàm để tính toán:".$sothuba.'<br>';
	$ketquaNoReturn= tinhTongNoReturn();
	echo"<br>có thể dùng ket qua cua ham khong return:".$ketquaNoReturn."không có <br>";
	// không in ra màn hình
	$sothutu = tinhTongNoReturn()+5;
	echo"<br> không thể dùng kết quả của hàm để tính toán:".$sothutu.'<br>';
?>
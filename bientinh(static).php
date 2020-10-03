<?php
function tinhTong($sothunhat,$sothuhai)
 {
	 static $ketqua = 0;
	 $ketqua =$ketqua+$sothunhat+$sothuhai;
	 echo $ketqua;
 }
 $a=3;
 $b=5;
 tinhTong($a,$b);
 echo("<br>");
 tinhTong($a,$b);
 //đc biết đến bên trong hàm nhưng giá trị của
 //chúng sẽ lưu lại sau mỗi lần gọi hàm
 ?>
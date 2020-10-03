<?php
//thay đổi giá trị biến toàn cuc
  $sothuhai=5;
  function tinhTong($sothunhat)
  {
	  global $sothuhai;
	  $sothuhai =$sothuhai+3;
	  return $sothunhat +$sothuhai;
  }
  //gọi hàm
  $a=9;
  echo tinhTong($a);
  echo("<br>");
  echo($sothuhai);
?>
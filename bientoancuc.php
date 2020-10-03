<?php
//biến toàn cục
  $sothuhai=5;
  function tinhTong($sothunhat)
  {
	  global $sothuhai;
	  return $sothunhat +$sothuhai;
  }
  //gọi hàm
  $a=3;
  echo tinhTong($a);
?>
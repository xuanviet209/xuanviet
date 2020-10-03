<?php
  function tinhTong($sothunhat,$sothuhai,$sothuba=5)
  {
	  return $sothunhat + $sothuhai + $sothuba;
  }
  //gọi hàm
  $sothunhat=3;
  $sothuhai=5;
  echo tinhTong($sothunhat,$sothuhai);
  echo("<br>");
  $sothuba=15;
  echo tinhTong($sothunhat,$sothuhai,$sothuba);
?>
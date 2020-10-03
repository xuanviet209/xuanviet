<?php
  // danh sách các hàm
  function f1()
  {
	  f2();
  }
  function f2()
  {
	  f3();
  }
  function f3()
  {
	  echo 'hello';
  }
  f1();
?>
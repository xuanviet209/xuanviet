<?php

   $today = getdate();
   $currenYear = $today["years"];
   echo"Ngày";
   echo"<select>";
   for($i=1;$i<=31;$i++)
   {
	   echo"<option>$i</option>";
   }
   echo"</select>";
   echo"Tháng";
   echo"</select>";
   for($i=1;$i<=12;$i++)
   {
	   echo"<option>$i</option>";
   }
   echo"</select>";
   echo"Năm";
   echo"</select>";
   for($i=1900;$i<=$currenYear;$i++)
   {
	   echo"<option>$i</option>";
   }
   echo"</select>";
?>
<?php
$a=99;
if($a<=100 && $a>=80)
{
  echo "excelent";
}
elseif ($a<=79 && $a>=60) {
  echo "1st class";
}
elseif ($a<=59 && $a>=50) {
  echo "2ed class";
}
elseif ($a<=49 && $a>=36) {
  echo "3rd class";
}
elseif ($a==35) {
  echo "pass";
}
elseif ($a<35) {
  echo "Fail";
}
else
{
echo "please enter corect percent";
}


?>

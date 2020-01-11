<?php 
  function tambah(){
  }
  $bil = array();
  for($x=1; $x<=10; $x++){
    if($x == 1){
      $bil[] = $x;
    }else{
      if($x % 2 == 1){
        $bil[] = $x;
      }
    }
  }
  echo "Array : ";
  $hasil=0;
  for($x=0; $x < count($bil); $x++){
    echo $bil[$x].' ';
    $hasil=$hasil+$bil[$x];
  }
  echo "<br> sum : ".$hasil;
?>
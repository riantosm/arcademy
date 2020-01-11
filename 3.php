<?php 
  function formatInput1($a,$s,$d,$f){
    $pattern = '/([^0-9]+)/';
    $angka = preg_replace($pattern,'',$a); 
    $data = explode("{", $a);
    $hasil = $data[0];
    if($angka[0]==0){
      $hasil = $hasil.' '.$s;
    }else if($angka[0]==1){
      $hasil = $hasil.' '.$d;
    }else{
      $hasil = $hasil.' '.$f;
    }
    if(empty($angka[1])){
    }else if($angka[1]==1){
      $hasil = $hasil.' '.$d;
    }else{
      $hasil = $hasil.' '.$s;
    }
    return $hasil;
  }
  echo formatInput1("Hello {0} {1}", "Arkademian", "Fighters!","");
  echo "<br>";
  echo formatInput1("This is an {2}", "Halangan", "Rintangan", "Exercise");
?>
<?php 
  function findSame($text){
  }
  $hasil = array();
  $text = array("cat","listen","code","silent","act","tac","silent");
  for($x=0; $x < count($text); $x++){
    $z = $x;
    for($y=1; $y < count($text)-$x; $y++){
      $kalimat1 = $text[$x];
      $jumlahkata1 = strlen($kalimat1);
      $kalimat2 = $text[$z+1];
      $jumlahkata2 = strlen($kalimat2);
      if($jumlahkata1 == $jumlahkata2){
        $mirip = 0;
        for($a=0; $a<=$jumlahkata1; $a++){
          for($b=0; $b<=$jumlahkata1; $b++){
            if($a==0 or $b==0){
              if(substr($kalimat1,$a,1)==substr($kalimat2,$b,1)){
                $mirip++;
              }
            }else{
              if(substr($kalimat1,$a,$a)==substr($kalimat2,$b,$b)){
                $mirip++;
              }
            }
          }
        }
        if($mirip>=3){
          $hasil[] = $kalimat1;
          $hasil[] = $kalimat2;
        }
      }
      $z++;
    }
  }
  if(empty($hasil)){
    echo "Tidak ditemukan!";
  }else{
    $count_values = array_count_values($hasil);
    function findDuplicates($count) {
      return $count > 1;
    }
    $duplicates = array_filter(array_count_values($hasil), "findDuplicates");
    $clear_array = array_unique($hasil);
    for($x=0; $x < count($clear_array); $x++){
      if(!empty($clear_array[$x])){
        echo $clear_array[$x]." <br>";
      }
    }
  }
?>
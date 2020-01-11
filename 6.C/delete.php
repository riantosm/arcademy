<?php

require('koneksi.php');

$id = $_GET['id'];

if(hapus($id)>0){
    echo "
    <script>
        alert('Data successfully deleted!');
        document.location.href = 'index.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Data failed to deleted!');
        document.location.href = 'index.php';
    </script>";
}
?>
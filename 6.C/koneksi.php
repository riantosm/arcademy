<?php
    $koneksi = mysqli_connect("localhost", "root", "", "arkademy");

    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $koneksi;
        $name = $data['name'];
        $category = $data['category'];
        $price = $data['price'];
        $cashier = $data['cashier'];

        $query="INSERT INTO product(id_product, name, price, id_category, id_cashier)values('','$name','$price','$category','$cashier')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM product WHERE id_product = $id");

        return mysqli_affected_rows($koneksi);
    }

    function ubah($data){
        global $koneksi;
        $id = $data['id'];
        $name = $data['name'];
        $id_category = $data['id_category'];
        $price = $data['price'];
        $id_cashier = $data['id_cashier'];

        $query="UPDATE product SET
                    name = '$name', 
                    price = '$price',
                    id_category = '$id_category', 
                    id_cashier = '$id_cashier'
                WHERE id_product = $id
                ";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
?>